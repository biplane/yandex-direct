<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\ApiSoapClient;
use Biplane\YandexDirect\Config;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

abstract class BaseTestCase extends TestCase
{
    /**
     * @template T of ApiSoapClient
     *
     * @param class-string<T> $soapClientClass
     * @param array<string>   $mockMethods
     *
     * @return MockObject&T
     */
    protected function createSoapClient(string $soapClientClass, Config $config, array $mockMethods = []): MockObject
    {
        $options = [
            'uri' => 'localhost',
            'location' => 'localhost',
        ];

        return $this->getMockBuilder($soapClientClass)
            ->setConstructorArgs([null, $config, $options])
            ->setMethods($mockMethods)
            ->getMockForAbstractClass();
    }
}
