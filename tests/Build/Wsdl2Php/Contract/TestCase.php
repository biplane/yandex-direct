<?php

namespace Biplane\Tests\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ArrayType;
use Biplane\Build\Wsdl2Php\Contract\ComplexType;
use Biplane\Build\Wsdl2Php\Contract\EnumType;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Xml\SchemaDocument;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Wsdl2PhpGenerator\Xml\WsdlDocument;
use Zend\Code\Generator\ClassGenerator;

abstract class TestCase extends BaseTestCase
{
    protected function setUp()
    {
        $reflProp = new \ReflectionProperty(SchemaDocument::class, 'loadedUrls');
        $reflProp->setAccessible(true);
        $reflProp->setValue(null, []);
    }

    protected function createWsdlDocument($wsdlFile)
    {
        $wsdl = __DIR__ . '/Fixtures/wsdl/' . $wsdlFile;
        $config = new Config([
            'inputFile' => $wsdl,
            'outputDir' => sys_get_temp_dir() . '/wsdl2php',
        ]);

        return new WsdlDocument($config, $wsdl);
    }

    protected function loadTypes($wsdlFile)
    {
        return $this->createWsdlDocument($wsdlFile)->getTypes();
    }

    protected function findType($typeName, array $types)
    {
        /** @var TypeNode $node */
        foreach ($types as $node) {
            if ($node->getName() === $typeName) {
                return $node;
            }
        }

        $this->fail(sprintf('Type "%s" not found in WSDL.', $typeName));
    }

    protected function assertClassGenerator($fixtureName, ClassGenerator $generator)
    {
        self::assertStringEqualsFile(__DIR__ . '/Fixtures/' . $fixtureName, $generator->generate(), $fixtureName);
    }

    protected function createEnumType($wsdlType, $namespace, array $types)
    {
        return new EnumType($this->findType($wsdlType, $types), $wsdlType, $namespace);
    }

    protected function createComplexType($wsdlType, $namespace, array $types)
    {
        return new ComplexType($this->findType($wsdlType, $types), $wsdlType, $namespace);
    }

    protected function createArrayType($wsdlType, $namespace, array $types)
    {
        return new ArrayType($this->findType($wsdlType, $types), $wsdlType, $namespace);
    }
}
