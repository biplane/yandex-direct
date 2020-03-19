<?php

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\ClassNameUtil;
use Biplane\Build\Wsdl2Php\Helper\ContractGeneratorTrait;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Biplane\YandexDirect\Api\ApiSoapClientV4;
use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;
use Doctrine\Common\Inflector\Inflector;
use RuntimeException;
use Wsdl2PhpGenerator\Xml\OperationNode;
use Wsdl2PhpGenerator\Xml\ServiceNode;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\MethodGenerator;

class ServiceType extends AbstractType implements GeneratorInterface
{
    use ContractGeneratorTrait;

    private $wsdlUri;
    private $operations = [];

    public function __construct(ServiceNode $service, $wsdlUri, $namespace)
    {
        parent::__construct($service->getName(), $namespace);

        $this->wsdlUri = $wsdlUri;
    }

    public function addOperation(OperationNode $operaion)
    {
        $this->operations[] = $operaion;
    }

    /**
     * {@inheritdoc}
     */
    protected function buildClass(ClassGenerator $generator, PhpTypeResolver $typeResolver)
    {
        $baseClientClass = $this->getBaseClientClass($this->wsdlUri);

        $generator
            ->addConstant('ENDPOINT', $this->wsdlUri)
            ->addUse($baseClientClass)
            ->addUse(Config::class)
            ->setExtendedClass(ClassNameUtil::unqualifiedClassName($baseClientClass))
            ->addMethodFromGenerator($this->createConstructor($typeResolver->getTypes()));

        foreach ($this->operations as $operation) {
            $generator->addMethodFromGenerator($this->createApiMethod($operation, $typeResolver));
        }
    }

    private function getBaseClientClass(string $wsdl): string
    {
        if (false !== strpos($wsdl, '/v4/')) {
            return ApiSoapClientV4::class;
        }

        if (false !== strpos($wsdl, '/v5/')) {
            return ApiSoapClientV5::class;
        }

        throw new RuntimeException(sprintf('Could not resolve the generic client type by WSDL: %s', $wsdl));
    }

    /**
     * @param AbstractDataType[] $types
     *
     * @return MethodGenerator
     */
    private function createConstructor(array $types)
    {
        $classmap = [];

        foreach ($types as $name => $type) {
            if ($type instanceof GeneratorInterface) {
                $classmap[] = sprintf("    '%s' => '%s',", $name, $type->getPhpIdentifier());
            }
        }

        $classmap = implode("\n", $classmap);

        $generator = new MethodGenerator('__construct');
        $generator->setBody(
            <<<CODE
\$options['classmap'] = [
{$classmap}
];

parent::__construct(self::ENDPOINT, \$config, \$options);
CODE
        );
        $generator->setParameter($this->createParameter('config', 'Config'));
        $generator->setParameter($this->createParameter('options', 'array'));

        return $generator;
    }

    private function createApiMethod(OperationNode $operation, PhpTypeResolver $typeResolver)
    {
        $generator = new MethodGenerator(Inflector::camelize($operation->getName()));
        $generator->setDocBlock($operation->getName() . '.');

        $params = [];

        if (!empty($operation->getParams())) {
            foreach (explode(', ', $operation->getParams()) as $param) {
                $pair = explode(' ', $param);
                $type = null;

                if (count($pair) === 1) {
                    $name = $pair[0];
                } else {
                    $type = $pair[0];
                    $name = $pair[1];
                }

                $params[] = $name;
                $phpType = $typeResolver->resolve($type, $this->namespace);

                $isArray = (substr($phpType, -2) === '[]') ? true : false;

                $generator->setParameter($this->createParameter(substr($name, 1), $phpType, $isArray));
                $this->addTag($generator, $this->createParamTag(substr($name, 1), $phpType));
            }
        }

        $generator->setBody(sprintf(
            "return \$this->__soapCall('%s', [%s]);",
            $operation->getName(),
            implode(', ', $params)
        ));

        if (!empty($operation->getReturns())) {
            $this->addTag(
                $generator,
                $this->createReturnTag($typeResolver->resolve($operation->getReturns(), $this->namespace))
            );
        }

        return $generator;
    }
}
