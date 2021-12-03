<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api\V4;

use Biplane\Tests\YandexDirect\Api\SoapClientTestCase;
use Biplane\YandexDirect\Api\V4\Contract\VersionDesc;
use Biplane\YandexDirect\Api\V4\YandexAPIService;
use VCR\VCR;

final class YandexAPIServiceTest extends SoapClientTestCase
{
    public function testMapWSDLTypesToPHP(): void
    {
        VCR::turnOn();
        VCR::insertCassette('YandexAPIService_GetVersion');

        $service = new YandexAPIService($this->createConfig(), $this->getSoapOptions());

        $response = $service->getAvailableVersions();

        self::assertCount(1, $response);
        self::assertInstanceOf(VersionDesc::class, $response[0]);
        self::assertSame(4, $response[0]->getVersionNumber());
    }
}
