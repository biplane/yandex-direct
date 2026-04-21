<?php

declare(strict_types=1);

namespace Biplane\Tests\Model;

use Biplane\Build\Config\ServiceConfig;
use Biplane\Build\Model\ModelFactory;
use Biplane\Build\Model\Property;
use Biplane\Build\Model\ServiceMethod;
use Biplane\Build\Model\Type;
use Biplane\Tests\WsdlProvider;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Psl\Iter;
use RuntimeException;

use function array_map;
use function sprintf;

#[CoversClass(ModelFactory::class)]
final class ModelFactoryTest extends TestCase
{
    #[Test]
    public function whenWsdlWithRpcStyle(): void
    {
        $config = new ServiceConfig(
            wsdl: 'dummy.wsdl',
            serviceName: 'ApiService',
            namespace: 'Acme\\Api',
            excludeOperations: [
                'CreateOrUpdateCampaign',
                'PingAPI',
            ],
        );
        $factory = new ModelFactory(
            schemaNamespaceMap: ['API' => 'Acme\\Api\\Dto'],
            renameTypeMap: [
                'API' => [
                    'ClientsUnitInfo' => 'RenamedClientsUnitInfo',
                    'NewForecastInfo' => 'RenamedNewForecastInfo',
                    'ForecastCommonInfo' => 'RenamedForecastCommonInfo',
                ],
            ],
        );

        $model = $factory->create(WsdlProvider::getV4(), $config);

        self::assertSame('ApiService', $model->name);
        self::assertSame('Acme\\Api', $model->namespace);
        self::assertSame('dummy.wsdl', $model->wsdl);

        $operationNames = array_map(
            static fn (ServiceMethod $method): string => $method->getOperationName(),
            $model->methods,
        );

        self::assertNotContains('CreateOrUpdateCampaign', $operationNames);
        self::assertNotContains('PingAPI', $operationNames);

        $method = $this->findMethod('getClientsUnits', $model->methods);

        self::assertNotNull($method);
        self::assertSame('GetClientsUnits', $method->getOperationName());
        self::assertSame('\\Acme\\Api\\Dto\\RenamedClientsUnitInfo', $method->returnType->getFQN());
        self::assertTrue($method->returnType->isArray());

        $method = $this->findMethod('createNewForecast', $model->methods);

        self::assertNotNull($method);
        self::assertSame('CreateNewForecast', $method->getOperationName());
        self::assertSame(
            '\\Acme\\Api\\Dto\\RenamedNewForecastInfo',
            $method->parameters[0]->type->getFQN(),
        );

        $type = $this->findType('GetForecastInfo', $model->types);

        self::assertNotNull($type);
        self::assertSame('Acme\\Api\\Dto\\GetForecastInfo', $type->getFQN());
        self::assertSame(
            '\\Acme\\Api\\Dto\\RenamedForecastCommonInfo',
            $this->findProperty('Common', $type->properties)->type->getFQN(),
        );
    }

    #[Test]
    public function whenWsdlWithDocumentStyle(): void
    {
        $config = new ServiceConfig(
            wsdl: 'dummy.wsdl',
            serviceName: 'ApiService',
            namespace: 'Acme\\Api',
        );
        $factory = new ModelFactory(
            schemaNamespaceMap: [
                'http://api.direct.yandex.com/v5/adextensiontypes' => 'Acme\\Api\\AdExtensionTypes',
                'http://api.direct.yandex.com/v5/ads' => 'Acme\\Api\\Ads',
                'http://api.direct.yandex.com/v5/general' => 'Acme\\Api\\General',
            ],
            renameTypeMap: [
                'http://api.direct.yandex.com/v5/ads' => [
                    'AddRequest' => 'RenamedAddRequest',
                    'AddResponse' => 'RenamedAddResponse',
                    'AdCategoryEnum' => 'RenamedAdCategoryEnum',
                ],
            ],
        );

        $model = $factory->create(WsdlProvider::getAdsV5(), $config);

        self::assertSame('ApiService', $model->name);
        self::assertSame('Acme\\Api', $model->namespace);
        self::assertSame('dummy.wsdl', $model->wsdl);

        $method = $this->findMethod('add', $model->methods);

        self::assertNotNull($method);
        self::assertSame('add', $method->getOperationName());
        self::assertSame('\\Acme\\Api\\Ads\\RenamedAddRequest', $method->parameters[0]->type->getFQN());
        self::assertSame('\\Acme\\Api\\Ads\\RenamedAddResponse', $method->returnType->getFQN());

        $type = $this->findType('RenamedAdCategoryEnum', $model->types);

        self::assertNotNull($type);
        self::assertSame('Acme\\Api\\Ads\\RenamedAdCategoryEnum', $type->getFQN());

        $type = $this->findType('ArrayOfAdCategoryEnum', $model->types);

        self::assertNotNull($type);
        self::assertSame(
            '\\Acme\\Api\\Ads\\RenamedAdCategoryEnum',
            $this->findProperty('Items', $type->properties)->type->getFQN(),
        );
    }

    /**
     * @param non-empty-string    $methodName
     * @param list<ServiceMethod> $methods
     */
    private function findMethod(string $methodName, array $methods): ServiceMethod|null
    {
        return Iter\search($methods, static fn (ServiceMethod $method): bool => $method->name === $methodName);
    }

    /**
     * @param non-empty-string $typeName
     * @param list<Type>       $types
     */
    private function findType(string $typeName, array $types): Type|null
    {
        return Iter\search($types, static fn (Type $type): bool => $type->name === $typeName);
    }

    /**
     * @param non-empty-string $propertyName
     * @param list<Property>   $properties
     */
    private function findProperty(string $propertyName, array $properties): Property
    {
        return Iter\search(
            $properties,
            static fn (Property $property): bool => $property->name === $propertyName,
        ) ?? throw new RuntimeException(sprintf('Property "%s" does not exist', $propertyName));
    }
}
