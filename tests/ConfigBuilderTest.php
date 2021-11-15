<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\ConfigBuilder;
use PHPUnit\Framework\TestCase;

class ConfigBuilderTest extends TestCase
{
    public function testWithDefaults(): void
    {
        $config = ConfigBuilder::create()
            ->setAccessToken('secret')
            ->getConfig();

        self::assertEquals('secret', $config->getAccessToken());
        self::assertNull($config->getClientLogin());
        self::assertNull($config->getMasterToken());
        self::assertFalse($config->useSandbox());
        self::assertFalse($config->useOperatorUnits());
    }

    public function testWithCustomOptions(): void
    {
        $config = ConfigBuilder::create()
            ->setAccessToken('secret')
            ->setClientLogin('mr-Robot')
            ->setLocale('ru')
            ->setMasterToken('secret2')
            ->useSandbox()
            ->useOperatorUnits()
            ->setProxy('localhost', 8888, 'user', 'pass')
            ->getConfig();

        self::assertEquals('secret', $config->getAccessToken());
        self::assertEquals('mr-robot', $config->getClientLogin());
        self::assertEquals('secret2', $config->getMasterToken());
        self::assertEquals('ru', $config->getLocale(Config::API_4));
        self::assertTrue($config->useSandbox());
        self::assertTrue($config->useOperatorUnits());
        self::assertEquals('localhost', $config->getProxyHost());
        self::assertSame(8888, $config->getProxyPort());
        self::assertEquals('user', $config->getProxyUsername());
        self::assertEquals('pass', $config->getProxyPassword());
    }
}
