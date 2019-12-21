<?php

namespace Biplane\Tests\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ArrayType;
use Biplane\Build\Wsdl2Php\Contract\ComplexType;
use Biplane\Build\Wsdl2Php\Contract\EnumType;
use Biplane\Tests\Build\Wsdl2Php\ParseWsdlTrait;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Zend\Code\Generator\ClassGenerator;

abstract class TestCase extends BaseTestCase
{
    use ParseWsdlTrait;

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

    protected static function assertClassGenerator($fixtureName, ClassGenerator $generator)
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
