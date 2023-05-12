<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\Config;
use PHPUnit\Framework\TestCase;
use Symfony\Component\OptionsResolver\Exception\InvalidArgumentException;

use const WSDL_CACHE_MEMORY;

class ConfigTest extends TestCase
{
    public function testWithDefaults(): void
    {
        $config = new Config(['access_token' => 'secret']);

        self::assertEquals('secret', $config->getAccessToken());
        self::assertNull($config->getClientLogin());
        self::assertNull($config->getMasterToken());
        self::assertEquals('en', $config->getLocale(Config::API_4));
        self::assertEquals('en', $config->getLocale(Config::API_5));
        self::assertFalse($config->useSandbox());
        self::assertFalse($config->useOperatorUnits());
        self::assertNull($config->getProxyHost());
        self::assertNull($config->getProxyPort());
        self::assertNull($config->getProxyUsername());
        self::assertNull($config->getProxyPassword());
        self::assertEquals(Config\SoapOptions::default(), $config->getSoapOptions());
    }

    public function testWithCustomOptions(): void
    {
        $soapOptions = Config\SoapOptions::default()->withWsdlCacheType(WSDL_CACHE_MEMORY);
        $config = new Config([
            'access_token' => 'secret',
            'client_login' => 'foo',
            'master_token' => 'secret2',
            'locale' => 'ru',
            'sandbox' => true,
            'use_operator_units' => true,
            'soap_options' => $soapOptions,
        ]);

        self::assertEquals('secret', $config->getAccessToken());
        self::assertEquals('foo', $config->getClientLogin());
        self::assertEquals('secret2', $config->getMasterToken());
        self::assertEquals('ru', $config->getLocale(Config::API_4));
        self::assertTrue($config->useSandbox());
        self::assertTrue($config->useOperatorUnits());
        self::assertEquals($soapOptions, $config->getSoapOptions());
    }

    /**
     * @dataProvider clientLoginProvider
     */
    public function testNormalizeClientLogin(string $input, string $expected): void
    {
        $config = new Config([
            'access_token' => 'secret',
            'client_login' => $input,
        ]);

        self::assertEquals($expected, $config->getClientLogin());
    }

    /**
     * @dataProvider provideLocales
     */
    public function testLocale(string $locale, int $apiVersion, string $expected): void
    {
        $config = new Config([
            'access_token' => 'secret',
            'locale' => $locale,
        ]);

        self::assertEquals($expected, $config->getLocale($apiVersion));
    }

    public function testThrowExceptionWhenClientLoginRequired(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Option "client_login" is required when the master token defined');

        new Config([
            'access_token' => 'secret',
            'master_token' => 'secret',
        ]);
    }

    public function testProxyWithoutCredentials(): void
    {
        $config = new Config([
            'access_token' => 'secret',
            'proxy_host' => 'localhost',
            'proxy_port' => 2341,
        ]);

        self::assertEquals('localhost', $config->getProxyHost());
        self::assertSame(2341, $config->getProxyPort());
        self::assertNull($config->getProxyUsername());
        self::assertNull($config->getProxyPassword());
        self::assertFalse($config->proxyAuthenticationRequired());
    }

    public function testProxyWithCredentials(): void
    {
        $config = new Config([
            'access_token' => 'secret',
            'proxy_host' => 'localhost',
            'proxy_port' => 2341,
            'proxy_username' => 'user',
            'proxy_password' => 'pass',
        ]);

        self::assertEquals('localhost', $config->getProxyHost());
        self::assertSame(2341, $config->getProxyPort());
        self::assertEquals('user', $config->getProxyUsername());
        self::assertEquals('pass', $config->getProxyPassword());
        self::assertTrue($config->proxyAuthenticationRequired());
    }

    public function testThrowExceptionWhenProxyPortMissing(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Both options "proxy_host" and "proxy_port" are required');

        new Config([
            'access_token' => 'secret',
            'proxy_host' => 'localhost',
        ]);
    }

    public function testThrowExceptionWhenProxyHostMissing(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Both options "proxy_host" and "proxy_port" are required');

        new Config([
            'access_token' => 'secret',
            'proxy_port' => 8888,
        ]);
    }

    /**
     * @return array<array{string, int, string}>
     */
    public static function provideLocales(): array
    {
        return [
            ['en', Config::API_4, 'en'],
            ['ru', Config::API_4, 'ru'],
            ['tr', Config::API_4, 'en'],
            ['uk', Config::API_4, 'ua'],
            ['ua', Config::API_4, 'ua'],
            ['en', Config::API_5, 'en'],
            ['ru', Config::API_5, 'ru'],
            ['tr', Config::API_5, 'tr'],
            ['uk', Config::API_5, 'uk'],
            ['ua', Config::API_5, 'uk'],
        ];
    }

    /**
     * @return iterable<array{input: string, expected: string}>
     */
    public static function clientLoginProvider(): iterable
    {
        yield 'without_domain' => [
            'input' => 'Mr.Robot',
            'expected' => 'mr-robot',
        ];

        yield 'with_domain' => [
            'input' => 'Mr.Robot@domain.local',
            'expected' => 'mr.robot@domain.local',
        ];
    }
}
