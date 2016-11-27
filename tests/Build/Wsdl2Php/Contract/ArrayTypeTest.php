<?php

namespace Biplane\Tests\Build\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ArrayType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ArrayTypeTest extends TestCase
{
    public function testPhpType()
    {
        $types = $this->loadTypes('yandexapiservice.wsdl');
        $type = $this->findType('ArrayOfCampaignInfo', $types);

        $typeResolver = new PhpTypeResolver([
            'CampaignInfo' => $this->createComplexType('CampaignInfo', 'Acme\Api\Contract', $types),
        ]);

        $arrayType = new ArrayType($type, 'ArrayOfCampaignInfo', 'Acme\Api\Contract');

        $this->assertEquals('Acme\Api\Contract\CampaignInfo[]', $arrayType->resolvePhpType($typeResolver));
    }
}
