<?php

namespace Biplane\Tests\Build\Wsdl2Php;

use Biplane\Build\Wsdl2Php\Contract\AbstractDataType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use PHPUnit\Framework\TestCase;

class PhpTypeResolverTest extends TestCase
{
    /**
     * @dataProvider getSimpleTypes
     */
    public function testResolveSimpleType($wsdlType, $phpType)
    {
        $resolver = new PhpTypeResolver([]);

        self::assertEquals($phpType, $resolver->resolve($wsdlType));
    }

    public function testResolveComplexType()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Foo\Bar\FirstType'),
            'secondType' => $this->createComplexTypeMock('Foo\Bar\SecondType'),
        ]);

        self::assertEquals('Foo\Bar\FirstType', $resolver->resolve('firstType'));
    }

    public function testResolveComplexTypeLikeArray()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Foo\Bar\FirstType'),
            'secondType' => $this->createComplexTypeMock('Foo\Bar\SecondType'),
        ]);

        self::assertEquals('Foo\Bar\SecondType[]', $resolver->resolve('secondType[]'));
    }

    public function testResolveComplexTypeWithRelativeNamespace()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Acme\Api\Contract\FirstType'),
        ]);

        self::assertEquals('Contract\FirstType', $resolver->resolve('firstType', 'Acme\Api'));
    }

    public function testResolveComplexTypeWhenInputNamespaceIsDifferent()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Acme\Api\Contract\FirstType'),
        ]);

        self::assertEquals('Acme\Api\Contract\FirstType', $resolver->resolve('firstType', 'Foo\Api'));
    }

    public function getSimpleTypes()
    {
        return [
            ['long', 'int'],
            ['date', 'string'],
            ['string', 'string'],
            ['date[]', 'string[]'],
            ['base64Binary', 'string'],
        ];
    }

    private function createComplexTypeMock($phpType)
    {
        $mock = $this->getMockBuilder(AbstractDataType::class)
            ->disableOriginalConstructor()
            ->setMethods(['resolvePhpType'])
            ->getMockForAbstractClass();

        $mock->expects(self::any())
            ->method('resolvePhpType')
            ->willReturn($phpType);

        return $mock;
    }
}
