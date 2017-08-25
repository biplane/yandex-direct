<?php

namespace Biplane\Tests\Build\Wsdl2Php;

use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class PhpTypeResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getSimpleTypes
     */
    public function testResolveSimpleType($wsdlType, $phpType)
    {
        $resolver = new PhpTypeResolver([]);

        $this->assertEquals($phpType, $resolver->resolve($wsdlType));
    }

    public function testResolveComplexType()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Foo\Bar\FirstType'),
            'secondType' => $this->createComplexTypeMock('Foo\Bar\SecondType'),
        ]);

        $this->assertEquals('Foo\Bar\FirstType', $resolver->resolve('firstType'));
    }

    public function testResolveComplexTypeLikeArray()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Foo\Bar\FirstType'),
            'secondType' => $this->createComplexTypeMock('Foo\Bar\SecondType'),
        ]);

        $this->assertEquals('Foo\Bar\SecondType[]', $resolver->resolve('secondType[]'));
    }

    public function testResolveComplexTypeWithRelativeNamespace()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Acme\Api\Contract\FirstType'),
        ]);

        $this->assertEquals('Contract\FirstType', $resolver->resolve('firstType', 'Acme\Api'));
    }

    public function testResolveComplexTypeWhenInputNamespaceIsDifferent()
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Acme\Api\Contract\FirstType'),
        ]);

        $this->assertEquals('Acme\Api\Contract\FirstType', $resolver->resolve('firstType', 'Foo\Api'));
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
        $mock = $this->getMockBuilder('Biplane\Build\Wsdl2Php\Contract\AbstractDataType')
            ->disableOriginalConstructor()
            ->setMethods(['resolvePhpType'])
            ->getMockForAbstractClass();

        $mock->expects($this->any())
            ->method('resolvePhpType')
            ->willReturn($phpType);

        return $mock;
    }
}
