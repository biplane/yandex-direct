<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\ApiSoapClientFactory;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGeneratorInterface;
use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5\AdGroups;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Runner\Runner;
use PHPUnit\Framework\TestCase;

class ApiSoapClientFactoryTest extends TestCase
{
    public function testCreateSoapClientWithDefaults(): void
    {
        $factory = new ApiSoapClientFactory();
        $config = new Config([
            'access_token' => 'secret',
        ]);

        $client = $factory->createSoapClient($config, AdGroups::class);

        self::assertInstanceOf(AdGroups::class, $client);
        self::assertSame(180, $client->getSoapCallTimeout());
        self::assertSame(Runner::default(), $client->getRunner());
    }

    public function testCreateSoapClientWithCustomCallTimeout(): void
    {
        $factory = new ApiSoapClientFactory(null, null, 150);
        $config = new Config([
            'access_token' => 'secret',
        ]);

        $client = $factory->createSoapClient($config, AdGroups::class);

        self::assertInstanceOf(AdGroups::class, $client);
        self::assertSame(150, $client->getSoapCallTimeout());
    }

    public function testCreateSoapClientWithCustomTransactionNumberGenerator(): void
    {
        $generator = $this->createMock(TransactionNumberGeneratorInterface::class);
        $factory = new ApiSoapClientFactory(null, $generator);
        $config = new Config([
            'access_token' => 'secret',
        ]);

        $client = $factory->createSoapClient($config, YandexAPIService::class);

        self::assertInstanceOf(YandexAPIService::class, $client);
        self::assertSame($generator, $client->getTransactionNumberGenerator());
    }
}
