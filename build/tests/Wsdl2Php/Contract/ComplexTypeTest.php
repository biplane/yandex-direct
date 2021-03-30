<?php

declare(strict_types=1);

namespace Biplane\Tests\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ComplexType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ComplexTypeTest extends TestCase
{
    public function testGenerate(): void
    {
        $type = $this->findType('AdGroupsSelectionCriteria', $this->loadTypes('adgroups.wsdl'));
        $complexType = new ComplexType($type, 'AdGroupsSelectionCriteria', 'Foo\Api\Contract');
        $typeResolver = new PhpTypeResolver([]);

        $generator = $complexType->generate($typeResolver);

        self::assertEquals('Foo\Api\Contract\AdGroupsSelectionCriteria', $complexType->resolvePhpType($typeResolver));
        self::assertClassGenerator('AdGroupsSelectionCriteria.class', $generator);
    }

    public function testGenerateWithExtendsAndResolvingEnumsType(): void
    {
        $namespace = 'Foo\Api\Contract';
        $wsdlTypes = $this->loadTypes('adgroups.wsdl');
        $type = $this->findType('AdGroupGetItem', $wsdlTypes);
        $complexType = new ComplexType($type, 'AdGroupGetItem', $namespace);
        $typeResolver = new PhpTypeResolver([
            'AdGroupTypesEnum' => $this->createEnumType('AdGroupTypesEnum', $namespace, $wsdlTypes),
            'StatusEnum' => $this->createEnumType('StatusEnum', $namespace, $wsdlTypes),
            'AdGroupBase' => $this->createComplexType('AdGroupBase', $namespace, $wsdlTypes),
            'MobileAppAdGroupGet' => $this->createComplexType('MobileAppAdGroupGet', $namespace, $wsdlTypes),
        ]);

        $generator = $complexType->generate($typeResolver);

        self::assertEquals('Foo\Api\Contract\AdGroupGetItem', $complexType->resolvePhpType($typeResolver));
        self::assertClassGenerator('AdGroupGetItem.class', $generator);
    }

    public function testEmbeddedType(): void
    {
        $namespace = 'Acme\Api\Contract';
        $wsdlTypes = $this->loadTypes('adgroups.wsdl');
        $complexType = new ComplexType(
            $this->findType('GetRequest', $wsdlTypes),
            'GetRequest',
            'Acme\Api\Contract'
        );
        $typeResolver = new PhpTypeResolver([
            'GetRequestGeneral' => $this->createComplexType('GetRequestGeneral', $namespace, $wsdlTypes),
            'AdGroupsSelectionCriteria' => $this->createComplexType(
                'AdGroupsSelectionCriteria',
                $namespace,
                $wsdlTypes
            ),
            'AdGroupFieldEnum' => $this->createEnumType('AdGroupFieldEnum', $namespace, $wsdlTypes),
            'MobileAppAdGroupFieldEnum' => $this->createEnumType(
                'MobileAppAdGroupFieldEnum',
                $namespace,
                $wsdlTypes
            ),
        ]);

        $generator = $complexType->generate($typeResolver);

        self::assertEquals('Acme\Api\Contract\GetRequest', $complexType->getPhpIdentifier());
        self::assertClassGenerator('GetRequest.class', $generator);
    }
}
