<?php

namespace Biplane\Wsdl2Php;

use Doctrine\Common\Inflector\Inflector;
use Wsdl2PhpGenerator\Generator as BaseGenerator;
use Wsdl2PhpGenerator\Validator;
use Wsdl2PhpGenerator\Xml\OperationNode;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlock\Tag\GenericTag;
use Zend\Code\Generator\DocBlock\Tag\ParamTag;
use Zend\Code\Generator\DocBlock\Tag\ReturnTag;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\FileGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\ParameterGenerator;
use Zend\Code\Generator\PropertyGenerator;
use Zend\Code\Generator\PropertyValueGenerator;
use Zend\Code\Generator\ValueGenerator;

/**
 * Generator
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class Generator extends BaseGenerator
{
    /**
     * {@inheritdoc}
     */
    protected function loadTypes()
    {
        $this->log('Loading types');

        $excludedTypes = $this->config->get('excludeTypes');
        $types = array();

        /** @var TypeNode $node */
        foreach ($this->wsdl->getTypes() as $node) {
            $types[$node->getName()] = $node;
        }

        foreach ($types as $name => $node) {
            if (in_array($node->getName(), $excludedTypes)) {
                continue;
            }

            if ($node->isComplex() && !$node->isArray()) {
                $generator = $this->createClassGenerator($node->getName(), true);
                $this->types[$node->getName()] = array(
                    'node'  => $node,
                    'class' => $generator
                );

                if ($node->isAbstract()) {
                    $generator->addFlag(ClassGenerator::FLAG_ABSTRACT);
                }

                $methodFactory = $this->createMethodGenerator(
                    'create',
                    'Creates a new instance of ' . $generator->getName() . '.'
                );
                $methodFactory->setStatic(true);
                $methodFactory->setBody('return new self();');
                $methodFactory->getDocBlock()->setTag(new ReturnTag($generator->getName()));

                $generator->addMethodFromGenerator($methodFactory);

                foreach ($node->getParts() as $fieldName => $fieldType) {
                    $fieldType = $this->validateType($fieldType);
                    $isArray = $node->isElementArray($fieldName);
                    $nullable = $node->isElementNillable($fieldName) || $node->getElementMinOccurs($fieldName) === 0;

                    if (!$isArray && isset($types[$fieldType])) {
                        /** @var $fieldNode TypeNode */
                        $fieldNode = $types[$fieldType];
                        $isArray = $fieldNode->isArray();
                        $fieldType = $isArray
                            ? $this->validateType($fieldNode->getRestriction()) . '[]'
                            : $fieldNode->getName();
                    }

                    $propertyValue = new PropertyValueGenerator($isArray && !$nullable ? array() : null);

                    $generator
                        ->addProperty($fieldName, $propertyValue, PropertyGenerator::FLAG_PROTECTED)
                        ->addMethodFromGenerator($this->createGetter($generator->getNamespaceName(), $fieldName, $fieldType, $isArray, $nullable))
                        ->addMethodFromGenerator($this->createSetter($generator->getNamespaceName(), $fieldName, $fieldType, $isArray, $nullable));
                }
            } elseif (count($enums = $node->getEnumerations()) > 0) {
                $generator = $this->createClassGenerator($node->getName(), true);
                $this->types[$node->getName()] = array(
                    'node'  => $node,
                    'class' => $generator
                );

                foreach ($enums as $value) {
                    if (preg_match('/[a-z]/', $value)) {
                        $name = Inflector::tableize($value);
                    } else {
                        $name = $value;
                    }

                    $generator->addConstant(strtoupper($name), $value);
                }
            }
        }

        foreach ($this->types as $item) {
            $baseType = $item['node']->getBase();

            if (isset($this->types[$baseType])) {
                $item['class']->setExtendedClass($this->types[$baseType]['class']->getName());
            }
        }

        $this->log('Done loading types');
    }

    /**
     * {@inheritdoc}
     */
    protected function loadService()
    {
        $service = $this->wsdl->getService();
        $this->log('Starting to load service ' . $service->getName());

        $this->service = $this->createClassGenerator($service->getName())
            ->setExtendedClass($this->config->get('soapClientClass'))
            ->addConstant('ENDPOINT', $this->config->get('inputFile'))
            ->addUse('Biplane\YandexDirect\Api\SoapClient')
            ->addUse('Biplane\YandexDirect\User')
            ->addUse('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $classmap = array();

        foreach ($this->types as $name => $item) {
            /** @var ClassGenerator $class */
            $class = $item['class'];
            $classmap[] = sprintf(
                "        '%s' => '%s'",
                $name,
                $class->getNamespaceName() . '\\' . $class->getName()
            );
        }

        $classmap = join(",\n", $classmap);

        $constructor = $this->createMethodGenerator('__construct', 'Constructor.')
            ->setBody(<<<CODE
parent::__construct(self::ENDPOINT, \$dispatcher, \$user, array(
    'classmap' => array(
{$classmap}
    )
));
CODE

            );
        $this->setParameter($this->service->getNamespaceName(), $constructor, 'dispatcher', 'EventDispatcherInterface');
        $this->setParameter($this->service->getNamespaceName(), $constructor, 'user', 'User');

        $this->service->addMethodFromGenerator($constructor);

        if ($this->config->get('fixApiNamespace')) {
            $doRequest = $this->createMethodGenerator('__doRequest', 'Performs a SOAP request.')
            ->setBody(<<<CODE
\$response = parent::__doRequest(\$request, \$location, \$action, \$version, \$oneWay);

if (!empty(\$response)) {
    \$xml = new \SimpleXMLElement(\$response);
    \$nss = array_flip(\$xml->getDocNamespaces(true));
    \$invalidNs = 'http://namespaces.soaplite.com/perl';

    if (isset(\$nss[\$invalidNs]) && isset(\$nss['API'])) {
        \$response = str_replace(\$nss[\$invalidNs] . ':', \$nss['API'] . ':', \$response);
    }
}

return \$response;
CODE
            );
            $this->setParameter($this->service->getNamespaceName(), $doRequest, 'request', 'string');
            $this->setParameter($this->service->getNamespaceName(), $doRequest, 'location', 'string');
            $this->setParameter($this->service->getNamespaceName(), $doRequest, 'action', 'string');
            $this->setParameter($this->service->getNamespaceName(), $doRequest, 'version', 'int');
            $this->setParameter($this->service->getNamespaceName(), $doRequest, 'oneWay', 'int', false, true);
            $doRequest->getDocBlock()->setTag(new ReturnTag('string'));
            $doRequest->getDocBlock()->setTag(new GenericTag('internal'));

            $this->service->addMethodFromGenerator($doRequest);
        }

        $excludedOperations = $this->config->get('excludeOperations');

        foreach ($this->wsdl->getOperations() as $operation) {
            if (in_array($operation->getName(), $excludedOperations)) {
                continue;
            }

            $this->service->addMethodFromGenerator(
                $this->generateApiMethod($this->service->getNamespaceName(), $operation)
            );
        }

        $this->log('Done loading service ' . $service->getName());
    }

    /**
     * {@inheritdoc}
     */
    protected function savePhp()
    {
        $dir = $this->ensureExistDir($this->config->get('outputDir'));

        $generator = new FileGenerator();
        $generator->setClass($this->service);
        $generator->setFilename($dir . '/' . $this->service->getName() . '.php');

        $generator->write();

        $dir = $this->ensureExistDir($dir . '/Contract');

        foreach ($this->types as $item) {
            $generator = new FileGenerator();
            $generator->setClass($item['class']);
            $generator->setFilename($dir . '/' . $item['class']->getName() . '.php');

            $generator->write();
        }
    }

    private function ensureExistDir($dir)
    {
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true)) {
                throw new \RuntimeException(sprintf('Could not create directory "%s" and it does not exist!', $dir));
            }
        }

        return realpath($dir);
    }

    private function normalizeMethodName($name)
    {
        return strtolower($name[0]) . substr($name, 1);
    }

    private function validateType($type)
    {
        $type = Validator::validateType($type);

        if (strtolower($type) === 'date') {
            return 'string';
        }

        return $type;
    }

    private function setParameter($ns, MethodGenerator $generator, $name, $type, $isArray = false, $nullable = false)
    {
        if ($isArray) {
            $typeHint = 'array';
        } elseif (null !== $typeNode = $this->findTypeNode($type)) {
            $typeHint = $this->resolveTypeName(
                $typeNode->isArray() ? $typeNode->getRestriction() : $typeNode->getName(),
                $ns
            );
        } else {
            $typeHint = $type;
        }

        $paramGenerator = new ParameterGenerator($name, $typeHint);
        $generator->setParameter($paramGenerator);

        if ($nullable) {
            $paramGenerator->setDefaultValue(new ValueGenerator());
        }

        if (null === $docBlock = $generator->getDocBlock()) {
            $docBlock = new DocBlockGenerator();
            $generator->setDocBlock($docBlock);
        }

        $docBlock->setTag(new ParamTag(
            $name,
            $this->getTypeHint($type, $ns, $isArray, $nullable)
        ));

        return $paramGenerator;
    }

    private function createClassGenerator($name, $isDataContract = false)
    {
        $name = call_user_func($this->config->get('renameType'), $name);

        $generator = new ClassGenerator(Inflector::classify($name));
        $generator->setDocBlock(new DocBlockGenerator('Auto-generated code.'));
        $generator->setNamespaceName($this->config->get('namespaceName') . ($isDataContract ? '\Contract' : ''));

        return $generator;
    }

    private function createMethodGenerator($name, $description)
    {
        $generator = new MethodGenerator($name);
        $generator->setDocBlock($description);

        return $generator;
    }

    private function createGetter($ns, $property, $type, $isArray, $nullable)
    {
        $generator = $this->createMethodGenerator('get' . ucfirst($property), 'Gets ' . $property . '.')
            ->setBody("return \$this->{$property};");

        $this->addReturnTag($ns, $generator, $type, $isArray, $nullable);

        return $generator;
    }

    private function createSetter($ns, $property, $type, $isArray, $nullable)
    {
        $generator = $this->createMethodGenerator('set' . ucfirst($property), 'Sets ' . $property . '.')
            ->setBody("\$this->{$property} = \$value;\n\nreturn \$this;");

        $this->setParameter($ns, $generator, 'value', $type, $isArray, $nullable);
        $this->addReturnTag($ns, $generator, '$this');

        return $generator;
    }

    private function generateApiMethod($ns, OperationNode $operation)
    {
        $generator = $this->createMethodGenerator(
            $this->normalizeMethodName($operation->getName()),
            $operation->getName() . '.'
        );

        $params = array();

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
                $this->setParameter($ns, $generator, substr($name, 1), $type, false);
            }
        }

        $generator->setBody(sprintf(
            "return \$this->invoke('%s', array(%s));",
            $operation->getName(),
            join(', ', $params)
        ));

        if (!empty($operation->getReturns())) {
            $this->addReturnTag($ns, $generator, $operation->getReturns());
        }

        return $generator;
    }

    private function addReturnTag($ns, MethodGenerator $generator, $type, $isArray = false, $nullable = false)
    {
        $docBlock = $generator->getDocBlock();

        if ($docBlock === null) {
            $docBlock = new DocBlockGenerator();
            $generator->setDocBlock($docBlock);
        }

        $docBlock->setTag(new ReturnTag(
            $this->getTypeHint($type, $ns, $isArray, $nullable)
        ));
    }

    private function findTypeNode($name)
    {
        if (isset($this->types[$name])) {
            return $this->types[$name]['node'];
        }

        return null;
    }

    private function getTypeHint($type, $currentNamespace, $isArray = false, $nullable = false)
    {
        if ($type instanceof TypeNode) {
            $typeNode = $type;
        } else {
            $typeNode = $this->findTypeNode($type);
        }

        $types = array();

        if ($typeNode !== null) {
            if ($typeNode->isArray()) {
                $types[] = $this->resolveTypeName($typeNode->getRestriction(), $currentNamespace) . '[]';
            } else {
                $types[] = $this->resolveTypeName($typeNode->getName() . ($isArray ? '[]' : ''), $currentNamespace);
            }
        } else {
            $types[] = $type;
        }

        if ($nullable) {
            $types[] = 'null';
        }

        return $types;
    }

    private function resolveTypeName($type, $currentNamespace)
    {
        if (isset($this->types[$type])) {
            /** @var ClassGenerator $class */
            $class = $this->types[$type]['class'];

            $len = strlen($currentNamespace);
            $ns = $class->getNamespaceName();

            if ($ns === $currentNamespace) {
                return $class->getName();
            }

            if (strlen($ns) >= $len && ($currentNamespace . '\\') === substr($ns, 0, $len + 1)) {
                $ns = substr($ns, $len + 1);
            }

            return $ns . '\\' . $class->getName();
        }

        return $this->validateType($type);
    }
}
