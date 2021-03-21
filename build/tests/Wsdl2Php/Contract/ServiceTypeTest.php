<?php

declare(strict_types=1);

namespace Biplane\Tests\Wsdl2Php\Contract;

use Biplane\Build\Wsdl2Php\Contract\ServiceType;
use Biplane\Build\Wsdl2Php\PhpTypeResolver;

class ServiceTypeTest extends TestCase
{
    public function testGenerate(): void
    {
        $wsdl = $this->createWsdlDocument('adgroups.wsdl');
        $wsdlTypes = $wsdl->getTypes();

        $serviceType = new ServiceType($wsdl->getService()->getName(), 'api/v5/adgroups.wsdl', 'Acme\Api');

        foreach ($wsdl->getOperations() as $operation) {
            $serviceType->addOperation($operation);
        }

        $typeResolver = new PhpTypeResolver([
            'GetRequest' => $this->createComplexType('GetRequest', 'Acme\Api\Contract', $wsdlTypes),
            'AddRequest' => $this->createComplexType('AddRequest', 'Acme\Api\Contract', $wsdlTypes),
            'AddResponse' => $this->createComplexType('AddResponse', 'Acme\Api\Contract', $wsdlTypes),
        ]);

        $generator = $serviceType->generate($typeResolver);

        self::assertEquals('Acme\Api\AdGroups', $serviceType->getPhpIdentifier());
        self::assertClassGenerator('AdGroups.class', $generator);
    }

    public function testGenerateWithResolveArrayTypeForReturnValue(): void
    {
        $wsdl = $this->createWsdlDocument('yandexapiservice.wsdl');
        $wsdlTypes = $wsdl->getTypes();

        $serviceType = new ServiceType($wsdl->getService()->getName(), 'api/v4/wsdl', 'Acme\Api');

        foreach ($wsdl->getOperations() as $operation) {
            if ($operation->getName() === 'GetSubClients') {
                $serviceType->addOperation($operation);
            }
        }

        $typeResolver = new PhpTypeResolver([
            'GetSubClientsRequest' => $this->createComplexType(
                'GetSubClientsRequest',
                'Acme\Api\Contract',
                $wsdlTypes
            ),
            'ClientFilter' => $this->createComplexType(
                'ClientFilter',
                'Acme\Api\Contract',
                $wsdlTypes
            ),
            'ArrayOfShortClientInfo' => $this->createArrayType(
                'ArrayOfShortClientInfo',
                'Acme\Api\Contract',
                $wsdlTypes
            ),
            'ShortClientInfo' => $this->createComplexType(
                'ShortClientInfo',
                'Acme\Api\Contract',
                $wsdlTypes
            ),
        ]);

        $generator = $serviceType->generate($typeResolver);

        self::assertEquals('Acme\Api\YandexAPIService', $serviceType->getPhpIdentifier());
        self::assertClassGenerator('YandexAPIService.class', $generator);
    }
}
