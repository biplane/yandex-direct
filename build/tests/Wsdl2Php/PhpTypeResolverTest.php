<?php

declare(strict_types=1);

namespace Biplane\Tests\Wsdl2Php;

use Biplane\Build\Wsdl2Php\Contract\AbstractDataType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;
use PHPUnit\Framework\TestCase;

class PhpTypeResolverTest extends TestCase
{
    /**
     * @dataProvider getSimpleTypes
     */
    public function testResolveSimpleType($wsdlType, $phpType): void
    {
        $resolver = new PhpTypeResolver([]);

        self::assertEquals($phpType, $resolver->resolve($wsdlType));
    }

    public function testResolveComplexType(): void
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Foo\Bar\FirstType'),
            'secondType' => $this->createComplexTypeMock('Foo\Bar\SecondType'),
        ]);

        self::assertEquals('Foo\Bar\FirstType', $resolver->resolve('firstType'));
    }

    public function testResolveComplexTypeLikeArray(): void
    {
        $resolver = new PhpTypeResolver([
            'firstType' => $this->createComplexTypeMock('Foo\Bar\FirstType'),
            'secondType' => $this->createComplexTypeMock('Foo\Bar\SecondType'),
        ]);

        self::assertEquals('Foo\Bar\SecondType[]', $resolver->resolve('secondType[]'));
    }

    /**
     * @return array<array<string>>
     */
    public function getSimpleTypes(): array
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

        $mock->method('resolvePhpType')->willReturn($phpType);

        return $mock;
    }
}
