<?php

declare(strict_types=1);

namespace Biplane\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\ClassNameUtil;
use Biplane\Build\Wsdl2Php\Helper\ContractGeneratorTrait;
use Biplane\Build\Wsdl2Php\Inflector;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use Laminas\Code\Generator\ClassGenerator;
use Laminas\Code\Generator\MethodGenerator;
use RuntimeException;
use Wsdl2PhpGenerator\Xml\OperationNode;

class ServiceType extends AbstractType implements GeneratorInterface
{
    use ContractGeneratorTrait;

    private const CONFIG_CLASS = 'Biplane\\YandexDirect\\Config';

    private $wsdlUri;

    /**
     * @var array<OperationNode>
     */
    private $operations = [];

    public function __construct(string $classname, string $wsdlUri, string $namespace)
    {
        parent::__construct($classname, $namespace);

        $this->wsdlUri = $wsdlUri;
    }

    public function addOperation(OperationNode $operation): void
    {
        $this->operations[] = $operation;
    }

    /**
     * {@inheritdoc}
     */
    protected function buildClass(ClassGenerator $generator, PhpTypeResolver $typeResolver): void
    {
        $baseClientClass = $this->getBaseClientClass($this->wsdlUri);

        $generator
            ->addConstant('ENDPOINT', $this->wsdlUri)
            ->addUse($baseClientClass)
            ->setExtendedClass($baseClientClass)
            ->addMethodFromGenerator($this->createConstructor($typeResolver->getTypes()));

        foreach ($this->operations as $operation) {
            $generator->addMethodFromGenerator($this->createApiMethod($operation, $typeResolver));
        }
    }

    private function getBaseClientClass(string $wsdl): string
    {
        if (false !== strpos($wsdl, '/v4/')) {
            return 'Biplane\\YandexDirect\\Api\\ApiSoapClientV4';
        }

        if (false !== strpos($wsdl, '/v5/')) {
            return 'Biplane\\YandexDirect\\Api\\ApiSoapClientV5';
        }

        throw new RuntimeException(sprintf('Could not resolve the generic client type by WSDL: %s', $wsdl));
    }

    /**
     * @param array<AbstractDataType> $types
     */
    private function createConstructor(array $types): MethodGenerator
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
        $generator->setParameter($this->createParameter('config', self::CONFIG_CLASS));
        $generator->setParameter($this->createParameter('options', 'array'));

        $this->addTag($generator, $this->createParamTag('options', 'array<string, mixed>'));

        return $generator;
    }

    private function createApiMethod(OperationNode $operation, PhpTypeResolver $typeResolver): MethodGenerator
    {
        $generator = new MethodGenerator(Inflector::camelize($operation->getName()));

        $params = [];

        if (!empty($operation->getParams())) {
            foreach (explode(', ', $operation->getParams()) as $param) {
                $pair = explode(' ', $param);
                $type = null;

                if (count($pair) === 1) {
                    $name = $pair[0];
                } else {
                    [$type, $name] = $pair;
                }

                $params[] = $name;
                $phpType = ClassNameUtil::fqcn($typeResolver->resolve($type));

                $isArray = substr($phpType, -2) === '[]';

                $generator->setParameter($this->createParameter(substr($name, 1), $phpType, $isArray));
                $this->addTag($generator, $this->createParamTag(substr($name, 1), $phpType));
            }
        }

        $generator->setBody(sprintf(
            "return \$this->__soapCall('%s', [%s]);",
            $operation->getName(),
            implode(', ', $params)
        ));

        if ($operation->getReturns() !== '') {
            $phpType = $typeResolver->resolve($operation->getReturns());
            $this->addTag(
                $generator,
                $this->createReturnTag(ClassNameUtil::fqcn($phpType))
            );
        }

        return $generator;
    }
}
