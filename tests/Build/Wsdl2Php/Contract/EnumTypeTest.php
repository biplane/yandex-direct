<?php

namespace Biplane\Tests\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\EnumType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class EnumTypeTest extends TestCase
{
    public function testContractShouldBeGeneratedForEnumeration()
    {
        $type = $this->findType('AdGroupTypesEnum', $this->loadTypes('adgroups.wsdl'));
        $enumType = new EnumType($type, 'AdGroupTypesEnum', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $enumType->generate($typeResolver);

        self::assertEquals('string', $enumType->resolvePhpType($typeResolver));
        self::assertEquals('Foo\Api\Contract\AdGroupTypesEnum', $enumType->getPhpIdentifier());
        self::assertClassGenerator('AdGroupTypesEnum.class', $generator);
    }

    public function testContractShouldBeGeneratedForEnumerationWithNormalizeNames()
    {
        $type = $this->findType('AdGroupFieldEnum', $this->loadTypes('adgroups.wsdl'));
        $enumType = new EnumType($type, 'AdGroupFieldEnum', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $enumType->generate($typeResolver);

        self::assertEquals('string', $enumType->resolvePhpType($typeResolver));
        self::assertEquals('Foo\Api\Contract\AdGroupFieldEnum', $enumType->getPhpIdentifier());
        self::assertClassGenerator('AdGroupFieldEnum.class', $generator);
    }

    public function testContractShouldBeGeneratedForTypeDefinedInExternalSchema()
    {
        $type = $this->findType('StatusEnum', $this->loadTypes('adgroups.wsdl'));
        $enumType = new EnumType($type, 'StatusEnum', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $enumType->generate($typeResolver);

        self::assertEquals('string', $enumType->resolvePhpType($typeResolver));
        self::assertEquals('Foo\Api\Contract\StatusEnum', $enumType->getPhpIdentifier());
        self::assertClassGenerator('StatusEnum.class', $generator);
    }
}
