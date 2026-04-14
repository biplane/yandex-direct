<?php

declare(strict_types=1);

namespace Biplane\Tests\Code;

use Biplane\Build\Code\TypeGenerator;
use Biplane\Build\Config\ServiceConfig;
use Biplane\Build\Model\ModelFactory;
use Biplane\Build\Model\Type;
use Biplane\Tests\WsdlProvider;
use Laminas\Code\Generator\FileGenerator;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Psl\Iter;
use RuntimeException;

use function sprintf;

#[CoversClass(TypeGenerator::class)]
final class TypeGeneratorTest extends TestCase
{
    private const string API_V4 = 'v4.live';
    private const string API_V5_ADS = 'v5.ads';
    private const string API_V5_AD_IMAGES = 'v5.adimages';

    #[Test]
    public function generateClassForEnumType(): void
    {
        $type = $this->findType('PriceCurrencyEnum', self::API_V5_ADS);
        $file = new FileGenerator();

        (new TypeGenerator())->generate($file, $type);

        self::assertStringEqualsFile(__DIR__ . '/fixtures/PriceCurrencyEnum.class', $file->generate());
    }

    #[Test]
    public function generateClassForArrayType(): void
    {
        $type = $this->findType('ArrayOfAdImageGet', self::API_V5_ADS);
        $file = new FileGenerator();

        (new TypeGenerator())->generate($file, $type);

        self::assertStringEqualsFile(__DIR__ . '/fixtures/ArrayOfAdImageGet.class', $file->generate());
    }

    #[Test]
    public function generateClassWithExtendsBaseType(): void
    {
        $type = $this->findType('AdAddItem', self::API_V5_ADS);
        $file = new FileGenerator();

        (new TypeGenerator())->generate($file, $type);

        self::assertStringEqualsFile(__DIR__ . '/fixtures/AdAddItem.class', $file->generate());
    }

    #[Test]
    public function generateClassWithBinaryType(): void
    {
        $type = $this->findType('AdImageAddItem', self::API_V5_AD_IMAGES);
        $file = new FileGenerator();

        (new TypeGenerator())->generate($file, $type);

        self::assertStringEqualsFile(__DIR__ . '/fixtures/AdImageAddItem.class', $file->generate());
    }

    #[Test]
    public function generateClassWithNullableProperties(): void
    {
        $type = $this->findType('EventsLogItem', self::API_V4);
        $file = new FileGenerator();

        (new TypeGenerator())->generate($file, $type);

        self::assertStringEqualsFile(__DIR__ . '/fixtures/EventsLogItem.class', $file->generate());
    }

    /**
     * @param non-empty-string $typeName
     * @param self::API_*      $fromApi
     */
    private function findType(string $typeName, string $fromApi): Type
    {
        $metadata = match ($fromApi) {
            self::API_V4 => WsdlProvider::getV4(),
            self::API_V5_ADS => WsdlProvider::getAdsV5(),
            self::API_V5_AD_IMAGES => WsdlProvider::getAdImagesV5(),
        };

        $factory = new ModelFactory(
            schemaNamespaceMap: [
                'API' => 'Acme\\Api\\Dto',
                'http://api.direct.yandex.com/v5/adextensiontypes' => 'Acme\\Api\\Dto',
                'http://api.direct.yandex.com/v5/adimages' => 'Acme\\Api\\Dto',
                'http://api.direct.yandex.com/v5/ads' => 'Acme\\Api\\Dto',
                'http://api.direct.yandex.com/v5/general' => 'Acme\\Api\\Dto',
            ],
            renameTypeMap: [],
        );
        $config = new ServiceConfig(
            wsdl: 'dummy.wsdl',
            serviceName: 'Foo',
            namespace: 'Acme\\Api',
        );

        $model = $factory->create($metadata, $config);

        return Iter\search(
            $model->types,
            static fn (Type $type): bool => $type->name === $typeName,
        ) ?? throw new RuntimeException(sprintf('Type with name "%s" not found', $typeName));
    }
}
