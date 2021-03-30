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

        $namespace = 'Acme\Api\Contract';
        $typeResolver = new PhpTypeResolver([
            'GetRequest' => $this->createComplexType('GetRequest', $namespace, $wsdlTypes),
            'AddRequest' => $this->createComplexType('AddRequest', $namespace, $wsdlTypes),
            'AddResponse' => $this->createComplexType('AddResponse', $namespace, $wsdlTypes),
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

        $namespace = 'Acme\Api\Contract';
        $typeResolver = new PhpTypeResolver([
            'GetSubClientsRequest' => $this->createComplexType('GetSubClientsRequest', $namespace, $wsdlTypes),
            'ClientFilter' => $this->createComplexType('ClientFilter', $namespace, $wsdlTypes),
            'ArrayOfShortClientInfo' => $this->createArrayType('ArrayOfShortClientInfo', $namespace, $wsdlTypes),
            'ShortClientInfo' => $this->createComplexType('ShortClientInfo', $namespace, $wsdlTypes),
        ]);

        $generator = $serviceType->generate($typeResolver);

        self::assertEquals('Acme\Api\YandexAPIService', $serviceType->getPhpIdentifier());
        self::assertClassGenerator('YandexAPIService.class', $generator);
    }
}
