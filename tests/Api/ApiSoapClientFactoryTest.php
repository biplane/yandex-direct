<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\Tests\YandexDirect\Api\V5\MockSoapClient;
use Biplane\YandexDirect\Api\ApiSoapClientFactory;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5\AdGroups;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Log\SoapLogger;
use Biplane\YandexDirect\Runner\Runner;
use PHPUnit\Framework\TestCase;

use const SOAP_1_1;
use const SOAP_COMPRESSION_ACCEPT;
use const SOAP_COMPRESSION_GZIP;
use const SOAP_SINGLE_ELEMENT_ARRAYS;
use const WSDL_CACHE_BOTH;

class ApiSoapClientFactoryTest extends TestCase
{
    public function testCreateSoapClientWithDefaults(): void
    {
        $factory = new ApiSoapClientFactory();
        $config = new Config(['access_token' => 'secret']);

        $client = $factory->createSoapClient($config, AdGroups::class);

        self::assertInstanceOf(AdGroups::class, $client);
        self::assertSame(180, $client->getSoapCallTimeout());
        self::assertSame(Runner::default(), $client->getRunner());
        self::assertNotNull($client->getLogContextFactory());
    }

    public function testCreateSoapClientWithCustomCallTimeout(): void
    {
        $factory = new ApiSoapClientFactory(null, null, 150);
        $config = new Config(['access_token' => 'secret']);

        $client = $factory->createSoapClient($config, AdGroups::class);

        self::assertInstanceOf(AdGroups::class, $client);
        self::assertSame(150, $client->getSoapCallTimeout());
    }

    public function testCreateSoapClientWithCustomTransactionNumberGenerator(): void
    {
        $generator = $this->createMock(TransactionNumberGenerator::class);
        $factory = new ApiSoapClientFactory(null, $generator);
        $config = new Config(['access_token' => 'secret']);

        $client = $factory->createSoapClient($config, YandexAPIService::class);

        self::assertInstanceOf(YandexAPIService::class, $client);
        self::assertSame($generator, $client->getTransactionNumberGenerator());
    }

    public function testPopulateSoapOptions(): void
    {
        $factory = new ApiSoapClientFactory();
        $soapOptions = Config\SoapOptions::default()
            ->withWsdlCacheType(WSDL_CACHE_BOTH)
            ->withCompression(SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 5);
        $config = new Config([
            'access_token' => 'secret',
            'soap_options' => $soapOptions,
        ]);

        $client = $factory->createSoapClient($config, MockSoapClient::class);

        self::assertInstanceOf(MockSoapClient::class, $client);
        self::assertSame(
            [
                'soap_version' => SOAP_1_1,
                'encoding' => 'UTF-8',
                'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                'trace' => true,
                'exceptions' => true,
                'keep_alive' => false,
                'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 5,
                'cache_wsdl' => WSDL_CACHE_BOTH,
            ],
            $client->getOptions()
        );
    }

    public function testInjectLoggerToService(): void
    {
        $logger = $this->createMock(SoapLogger::class);
        $factory = new ApiSoapClientFactory(null, null, null, $logger);
        $config = new Config(['access_token' => 'secret']);

        $client = $factory->createSoapClient($config, AdGroups::class);

        self::assertSame($logger, $client->getLogger());
    }
}
