<?php

namespace Biplane\Tests\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ComplexType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ComplexTypeTest extends TestCase
{
    public function testGenerate()
    {
        $type = $this->findType('AdGroupsSelectionCriteria', $this->loadTypes('adgroups.wsdl'));
        $complexType = new ComplexType($type, 'AdGroupsSelectionCriteria', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $complexType->generate($typeResolver);

        $this->assertEquals('Foo\Api\Contract\AdGroupsSelectionCriteria', $complexType->resolvePhpType($typeResolver));
        $this->assertClassGenerator('AdGroupsSelectionCriteria.class', $generator);
    }

    public function testGenerateWithExtendsAndResolvingEnumsType()
    {
        $wsdlTypes = $this->loadTypes('adgroups.wsdl');
        $type = $this->findType('AdGroupGetItem', $wsdlTypes);
        $complexType = new ComplexType($type, 'AdGroupGetItem', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([
            'AdGroupTypesEnum' => $this->createEnumType('AdGroupTypesEnum', 'Foo\Api\Contract', $wsdlTypes),
            'StatusEnum' => $this->createEnumType('StatusEnum', 'Foo\Api\Contract', $wsdlTypes),
            'AdGroupBase' => $this->createComplexType('AdGroupBase', 'Foo\Api\Contract', $wsdlTypes),
        ]);

        $generator = $complexType->generate($typeResolver);

        $this->assertEquals('Foo\Api\Contract\AdGroupGetItem', $complexType->resolvePhpType($typeResolver));
        $this->assertClassGenerator('AdGroupGetItem.class', $generator);
    }

    public function testEmbeddedType()
    {
        $wsdlTypes = $this->loadTypes('adgroups.wsdl');
        $complexType = new ComplexType(
            $this->findType('GetRequest', $wsdlTypes),
            'GetRequest',
            'Acme\Api\Contract'
        );
        $typeResolver = new PhpTypeResolver([
            'AdGroupsSelectionCriteria' => $this->createComplexType('AdGroupsSelectionCriteria', 'Acme\Api\Contract', $wsdlTypes),
            'AdGroupFieldEnum' => $this->createEnumType('AdGroupFieldEnum', 'Acme\Api\Contract', $wsdlTypes),
            'MobileAppAdGroupFieldEnum' => $this->createEnumType('MobileAppAdGroupFieldEnum', 'Acme\Api\Contract', $wsdlTypes),
        ]);

        $generator = $complexType->generate($typeResolver);

        $this->assertEquals('Acme\Api\Contract\GetRequest', $complexType->getPhpIdentifier());
        $this->assertClassGenerator('GetRequest.class', $generator);
    }
}
