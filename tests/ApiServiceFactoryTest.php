<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\Tests\YandexDirect\Api\V5\MockSoapClient;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator;
use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5\AdGroups;
use Biplane\YandexDirect\ApiServiceFactory;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Log\SoapLogger;
use Biplane\YandexDirect\Runner\Runner;
use PHPUnit\Framework\TestCase;

use const SOAP_1_1;
use const SOAP_COMPRESSION_ACCEPT;
use const SOAP_COMPRESSION_GZIP;
use const SOAP_SINGLE_ELEMENT_ARRAYS;
use const WSDL_CACHE_BOTH;

class ApiServiceFactoryTest extends TestCase
{
    public function testCreateSoapClientWithDefaults(): void
    {
        $factory = new ApiServiceFactory();
        $config = new Config(['access_token' => 'secret']);

        $service = $factory->createService($config, AdGroups::class);

        self::assertInstanceOf(AdGroups::class, $service);
        self::assertSame(180, $service->getSoapCallTimeout());
        self::assertSame(Runner::default(), $service->getRunner());
        self::assertNotNull($service->getLogContextFactory());
    }

    public function testCreateSoapClientWithCustomCallTimeout(): void
    {
        $factory = new ApiServiceFactory(null, null, 150);
        $config = new Config(['access_token' => 'secret']);

        $service = $factory->createService($config, AdGroups::class);

        self::assertInstanceOf(AdGroups::class, $service);
        self::assertSame(150, $service->getSoapCallTimeout());
    }

    public function testCreateSoapClientWithCustomTransactionNumberGenerator(): void
    {
        $generator = $this->createMock(TransactionNumberGenerator::class);
        $factory = new ApiServiceFactory(null, $generator);
        $config = new Config(['access_token' => 'secret']);

        $service = $factory->createService($config, YandexAPIService::class);

        self::assertInstanceOf(YandexAPIService::class, $service);
        self::assertSame($generator, $service->getTransactionNumberGenerator());
    }

    public function testPopulateSoapOptions(): void
    {
        $factory = new ApiServiceFactory();
        $soapOptions = Config\SoapOptions::default()
            ->withWsdlCacheType(WSDL_CACHE_BOTH)
            ->withCompression(SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP | 5);
        $config = new Config([
            'access_token' => 'secret',
            'soap_options' => $soapOptions,
        ]);

        $service = $factory->createService($config, MockSoapClient::class);

        self::assertInstanceOf(MockSoapClient::class, $service);
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
            $service->getOptions()
        );
    }

    public function testInjectLoggerToService(): void
    {
        $logger = $this->createMock(SoapLogger::class);
        $factory = new ApiServiceFactory(null, null, null, $logger);
        $config = new Config(['access_token' => 'secret']);

        $service = $factory->createService($config, AdGroups::class);

        self::assertSame($logger, $service->getLogger());
    }
}
