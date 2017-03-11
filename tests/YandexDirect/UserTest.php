<?php

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\User;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function getLocales()
    {
        return [
            [User::LOCALE_EN],
            [User::LOCALE_RU],
            [User::LOCALE_UA],
        ];
    }

    /**
     * @dataProvider getLocales
     */
    public function testLocaleShouldBeSet($locale)
    {
        $config = new User([
            'locale' => $locale,
            'access_token' => 'foo',
        ]);

        $this->assertSame($locale, $config->getLocale());
    }

    public function testLoginShouldBeNormalized()
    {
        $config = new User([
            'login' => 'p.g.Ivanov',
            'access_token' => 'foo',
        ]);

        $this->assertEquals('p-g-ivanov', $config->getLogin());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowExceptionWhenSetMasterTokenAndLoginIsMissing()
    {
        new User([
            'access_token' => 'foo',
            'master_token' => 'bar',
        ]);
    }

    public function testMasterTokenShouldBeSet()
    {
        $config = new User([
            'master_token' => 'foo',
            'login' => 'bar',
            'access_token' => 'token',
        ]);

        $this->assertSame('foo', $config->getMasterToken());
        $this->assertSame('bar', $config->getLogin());
    }

    public function testFinanceTokenShouldBeCreated()
    {
        $config = new User([
            'master_token' => 't0ken',
            'login' => 'log1n',
            'access_token' => 'foo',
        ]);

        $this->assertEquals(
            'ca556216659079c5e21ae6647560b3d4ad94b950a2d613974ab934e0a9f54d7d',
            $config->createFinanceToken('foo', 1)
        );
    }

    public function testHashCodeShouldBeGenerated()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $this->assertEquals('acbd18db4cc2f85cedef654fccc4a4d8', $user->getHashCode());
    }

    public function testEventDispatcherShouldBeCreatedWhenNotGiven()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $this->assertInstanceOf('Symfony\Component\EventDispatcher\EventDispatcher', $user->getEventDispatcher());
    }

    public function testApiServiceShouldBeCreated()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $this->assertInstanceOf('Biplane\YandexDirect\Api\V4\YandexApiService', $user->getApiService());
    }

    public function getServicesProxies()
    {
        return [
            ['Biplane\YandexDirect\Api\V4\YandexApiService', 'getApiService'],
            ['Biplane\YandexDirect\Api\V5\AdGroups', 'getAdGroupsService'],
            ['Biplane\YandexDirect\Api\V5\Ads', 'getAdsService'],
            ['Biplane\YandexDirect\Api\V5\Bids', 'getBidsService'],
            ['Biplane\YandexDirect\Api\V5\BidModifiers', 'getBidModifiersService'],
            ['Biplane\YandexDirect\Api\V5\Campaigns', 'getCampaignsService'],
            ['Biplane\YandexDirect\Api\V5\Changes', 'getChangesService'],
            ['Biplane\YandexDirect\Api\V5\Clients', 'getClientsService'],
            ['Biplane\YandexDirect\Api\V5\Keywords', 'getKeywordsService'],
            ['Biplane\YandexDirect\Api\V5\Sitelinks', 'getSitelinksService'],
            ['Biplane\YandexDirect\Api\V5\VCards', 'getVCardsService'],
            ['Biplane\YandexDirect\Api\V5\AdExtensions', 'getAdExtensionsService'],
            ['Biplane\YandexDirect\Api\V5\Dictionaries', 'getDictionariesService'],
            ['Biplane\YandexDirect\Api\V5\DynamicTextAdTargets', 'getDynamicTextAdTargetsService'],
        ];
    }

    /**
     * @dataProvider getServicesProxies
     */
    public function testServiceProxyShouldBeInstantiated($serviceClass, $method)
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $this->assertInstanceOf($serviceClass, $user->$method());
    }

    public function testServiceProxyShouldBeCached()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $proxy = $user->getAdsService();

        $this->assertSame($proxy, $user->getAdsService());
    }

    public function testResolveWSDLWhenSandboxIsDisabled()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $this->assertEquals(
            'https://api.direct.yandex.ru/live/v4/wsdl/',
            $user->resolveWsdl('https://api.direct.yandex.ru/live/v4/wsdl/')
        );
    }

    public function testResolveWSDLWhenSandboxIsEnabled()
    {
        $user = new User([
            'access_token' => 'foo',
            'sandbox' => true,
        ]);

        $this->assertEquals(
            'https://api-sandbox.direct.yandex.ru/live/v4/wsdl/',
            $user->resolveWsdl('https://api.direct.yandex.ru/live/v4/wsdl/')
        );
    }

    public function testUseOperatorUnits()
    {
        $user = new User([
            'access_token' => 'foo',
            'use_operator_units' => true,
        ]);

        $this->assertTrue($user->useOperatorUnits());
    }
}
