<?php

declare(strict_types=1);

namespace Biplane\Tests\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ArrayType;
use Biplane\Build\Wsdl2Php\Contract\ComplexType;
use Biplane\Build\Wsdl2Php\Contract\EnumType;
use Biplane\Tests\Wsdl2Php\ParseWsdlTrait;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Wsdl2PhpGenerator\Xml\TypeNode;
use Zend\Code\Generator\ClassGenerator;

abstract class TestCase extends BaseTestCase
{
    use ParseWsdlTrait;

    /**
     * @param array<TypeNode> $types
     */
    protected function findType(string $typeName, array $types): TypeNode
    {
        foreach ($types as $node) {
            if ($node->getName() === $typeName) {
                return $node;
            }
        }

        self::fail(sprintf('Type "%s" not found in WSDL.', $typeName));
    }

    protected static function assertClassGenerator(string $fixtureName, ClassGenerator $generator): void
    {
        self::assertStringEqualsFile(__DIR__ . '/Fixtures/' . $fixtureName, $generator->generate(), $fixtureName);
    }

    /**
     * @param array<TypeNode> $types
     */
    protected function createEnumType(string $wsdlType, string $namespace, array $types): EnumType
    {
        return new EnumType($this->findType($wsdlType, $types), $wsdlType, $namespace);
    }

    /**
     * @param array<TypeNode> $types
     */
    protected function createComplexType(string $wsdlType, string $namespace, array $types): ComplexType
    {
        return new ComplexType($this->findType($wsdlType, $types), $wsdlType, $namespace);
    }

    /**
     * @param array<TypeNode> $types
     */
    protected function createArrayType(string $wsdlType, string $namespace, array $types): ArrayType
    {
        return new ArrayType($this->findType($wsdlType, $types), $wsdlType, $namespace);
    }
}
