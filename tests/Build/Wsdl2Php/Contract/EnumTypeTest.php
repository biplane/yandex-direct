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

        $this->assertEquals('string', $enumType->resolvePhpType($typeResolver));
        $this->assertEquals('Foo\Api\Contract\AdGroupTypesEnum', $enumType->getPhpIdentifier());
        $this->assertClassGenerator('AdGroupTypesEnum.class', $generator);
    }

    public function testContractShouldBeGeneratedForEnumerationWithNormalizeNames()
    {
        $type = $this->findType('AdGroupFieldEnum', $this->loadTypes('adgroups.wsdl'));
        $enumType = new EnumType($type, 'AdGroupFieldEnum', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $enumType->generate($typeResolver);

        $this->assertEquals('string', $enumType->resolvePhpType($typeResolver));
        $this->assertEquals('Foo\Api\Contract\AdGroupFieldEnum', $enumType->getPhpIdentifier());
        $this->assertClassGenerator('AdGroupFieldEnum.class', $generator);
    }

    public function testContractShouldBeGeneratedForTypeDefinedInExternalSchema()
    {
        $type = $this->findType('StatusEnum', $this->loadTypes('adgroups.wsdl'));
        $enumType = new EnumType($type, 'StatusEnum', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $enumType->generate($typeResolver);

        $this->assertEquals('string', $enumType->resolvePhpType($typeResolver));
        $this->assertEquals('Foo\Api\Contract\StatusEnum', $enumType->getPhpIdentifier());
        $this->assertClassGenerator('StatusEnum.class', $generator);
    }
}
