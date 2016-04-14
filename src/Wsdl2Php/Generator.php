<?php

namespace Biplane\Wsdl2Php;

use Doctrine\Common\Inflector\Inflector;
use Wsdl2PhpGenerator\Generator as BaseGenerator;
use Wsdl2PhpGenerator\Validator;
use Wsdl2PhpGenerator\Xml\OperationNode;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Zend\Code\Generator\ClassGenerator;
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

            if ($node->isComplex()) {
                $this->types[$node->getName()] = array(
                    'node'  => $node,
                    'class' => null
                );

                if (!$node->isArray()) {
                    $generator = $this->createClassGenerator($node->getName(), true);
                    $this->types[$node->getName()]['class'] = $generator;

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
                        $isArray = $node->isElementArray($fieldName);
                        $nullable = $node->isElementNillable($fieldName) || $node->getElementMinOccurs($fieldName) === 0;

                        if (!$isArray && isset($types[$fieldType])) {
                            $fieldType = $types[$fieldType];
                            $isArray = $fieldType->isArray();
                        }

                        $propertyValue = new PropertyValueGenerator($isArray && !$nullable ? array() : null);

                        $generator
                            ->addProperty($fieldName, $propertyValue, PropertyGenerator::FLAG_PROTECTED)
                            ->addMethodFromGenerator(
                                $this->createGetter(
                                    $generator->getNamespaceName(),
                                    $fieldName,
                                    $fieldType,
                                    $isArray,
                                    $nullable
                                )
                            )
                            ->addMethodFromGenerator(
                                $this->createSetter(
                                    $generator->getNamespaceName(),
                                    $fieldName,
                                    $fieldType,
                                    $isArray,
                                    $nullable
                                )
                            );
                    }
                }
            } elseif (count($enums = $node->getEnumerations()) > 0) {
                $generator = $this->createClassGenerator($node->getName(), true);
                $this->types[$node->getName()] = array(
                    'node'  => $node,
                    'class' => $generator
                );

                foreach ($enums as $value) {
                    $name = $value;

                    if (preg_match('/[a-z]/', $name)) {
                        $name = Inflector::tableize($name);
                    }

                    $generator->addConstant(Validator::validateConstant(strtoupper($name)), $value);
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
            ->addConstant('ENDPOINT', $this->config->get('inputFile'));

        $baseClass = ltrim($this->config->get('baseSoapClientClass'), '\\');

        if (false !== $pos = strrpos($baseClass, '\\')) {
            $this->service
                ->setExtendedClass(substr($baseClass, $pos + 1))
                ->addUse(trim($baseClass, '\\'));
        } else {
            $this->service->setExtendedClass('\\' . $baseClass);
        }

        $this->service
            ->addUse('Biplane\YandexDirect\User')
            ->addUse('Symfony\Component\EventDispatcher\EventDispatcherInterface');

        $classmap = array();

        foreach ($this->types as $name => $item) {
            /** @var ClassGenerator $class */
            if (null === $class = $item['class']) {
                continue;
            }

            $classmap[] = sprintf(
                "        '%s' => '%s'",
                $name,
                $class->getNamespaceName() . '\\' . $class->getName()
            );
        }

        $classmap = join(",\n", $classmap);

        $constructor = $this->createMethodGenerator('__construct', 'Constructor.')
            ->setBody(<<<CODE
parent::__construct(\$user->resolveWsdl(self::ENDPOINT), \$dispatcher, \$user, array(
    'classmap' => array(
{$classmap}
    )
));
CODE

            );
        $this->setParameter($this->service->getNamespaceName(), $constructor, 'dispatcher', 'EventDispatcherInterface');
        $this->setParameter($this->service->getNamespaceName(), $constructor, 'user', 'User');

        $this->service->addMethodFromGenerator($constructor);

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
            if ($item['class'] === null) {
                continue;
            }

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
        if (substr($type, -2) === '[]') {
            return $this->validateType(substr($type, 0, -2)) . '[]';
        }

        $type = Validator::validateType($type);

        switch (strtolower($type)) {
            case 'date':
                $type = 'string';
                break;
            case 'arrayofstring':
                $type = 'string';
                break;
        }

        return $type;
    }

    private function setParameter($ns, MethodGenerator $generator, $name, $type, $isArray = false, $nullable = false)
    {
        if ($isArray) {
            $paramType = 'array';
        } elseif (null !== $typeNode = $this->resolveTypeNode($type)) {
            if ($typeNode->isArray()) {
                $paramType = 'array';
            } else {
                $paramType = $this->resolveTypeName($typeNode->getName(), $ns);
            }
        } else {
            $paramType = $this->validateType($type);
        }

        $paramGenerator = new ParameterGenerator($name, $paramType);
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

    /**
     * Resolves the TypeNode for the specific type.
     *
     * @param TypeNode|string $type
     *
     * @return TypeNode|null
     */
    private function resolveTypeNode($type)
    {
        if ($type instanceof TypeNode) {
            return $type;
        }

        if (isset($this->types[$type])) {
            return $this->types[$type]['node'];
        }

        return null;
    }

    private function getTypeHint($type, $currentNamespace, $isArray = false, $nullable = false)
    {
        $typeNode = $this->resolveTypeNode($type);
        $types = array();

        if ($typeNode !== null) {
            if ($typeNode->isArray()) {
                $parts = $typeNode->getParts();

                if (isset($parts[$typeNode->getName()])) {
                    $type = $parts[$typeNode->getName()];
                } elseif ($parts['Items']) {
                    $type = $parts['Items'];
                } else {
                    throw new \RuntimeException(sprintf(
                        'Could not determine type of element of array %s.',
                        $typeNode->getName()
                    ));
                }

                if (substr($type, -2) === '[]') {
                    $type = substr($type, 0, -2);
                }

                $types[] = $this->resolveTypeName($type, $currentNamespace) . '[]';
            } else {
                $types[] = $this->resolveTypeName($typeNode->getName(), $currentNamespace) . ($isArray ? '[]' : '');
            }
        } else {
            $types[] = $type === '$this' ? $type : $this->validateType($type);
        }

        if ($nullable) {
            $types[] = 'null';
        }

        return $types;
    }

    private function resolveTypeName($type, $currentNamespace)
    {
        if (isset($this->types[$type])) {
            $class = $this->types[$type]['class'];

            if ($class instanceof ClassGenerator) {
                $len = strlen($currentNamespace);
                $ns  = $class->getNamespaceName();

                if ($ns === $currentNamespace) {
                    return $class->getName();
                }

                if (strlen($ns) >= $len && ($currentNamespace . '\\') === substr($ns, 0, $len + 1)) {
                    $ns = substr($ns, $len + 1);
                }

                return $ns . '\\' . $class->getName();
            }
        }

        return $this->validateType($type);
    }
}
