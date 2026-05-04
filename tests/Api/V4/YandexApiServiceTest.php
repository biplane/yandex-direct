<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V4;

use Biplane\Tests\YandexDirect\Api\SoapClientTestCase;
use Biplane\YandexDirect\Api\V4\YandexApiService;
use VCR\VCR;

final class YandexApiServiceTest extends SoapClientTestCase
{
    public function testMapWSDLTypesToPHP(): void
    {
        VCR::turnOn();
        VCR::insertCassette('YandexAPIService_GetVersion');

        $service = new YandexApiService($this->createConfig(), $this->getSoapOptions());

        $response = $service->getAvailableVersions();

        self::assertCount(1, $response);
        self::assertInstanceOf(YandexApiService\VersionDesc::class, $response[0]);
        self::assertSame(4, $response[0]->getVersionNumber());
    }
}
