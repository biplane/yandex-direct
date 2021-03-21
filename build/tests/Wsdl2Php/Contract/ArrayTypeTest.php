<?php

declare(strict_types=1);

namespace Biplane\Tests\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ArrayType;
use Biplane\Build\Wsdl2Php\Contract\EnumType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ArrayTypeTest extends TestCase
{
    public function testPhpTypeForComplexTypeWithRestriction(): void
    {
        $types = $this->loadTypes('yandexapiservice.wsdl');
        $type = $this->findType('ArrayOfCampaignInfo', $types);

        $typeResolver = new PhpTypeResolver([
            'CampaignInfo' => $this->createComplexType('CampaignInfo', 'Acme\Api\Contract', $types),
        ]);

        $arrayType = new ArrayType($type, 'ArrayOfCampaignInfo', 'Acme\Api\Contract');

        self::assertEquals('Acme\Api\Contract\CampaignInfo[]', $arrayType->resolvePhpType($typeResolver));
    }

    public function testPhpTypeForComplexTypeWithItemsElement(): void
    {
        $types = $this->loadTypes('ads.wsdl');
        $node = $this->findType('ArrayOfAdCategoryEnum', $types);

        $typeResolver = new PhpTypeResolver([
            'AdCategoryEnum' => new EnumType(
                $this->findType('AdCategoryEnum', $types),
                'AdCategoryEnum',
                'Acme\Api\Contract'
            ),
        ]);

        $arrayType = new ArrayType($node, 'ArrayOfAdCategoryEnum', 'Acme\Api\Contract');

        self::assertEquals('string[]', $arrayType->resolvePhpType($typeResolver));
    }
}
