<?php

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcher;

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

        $this->assertInstanceOf(EventDispatcher::class, $user->getEventDispatcher());
    }

    public function testApiServiceShouldBeCreated()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $this->assertInstanceOf(YandexAPIService::class, $user->getApiService());
    }

    public function getServicesProxies()
    {
        return [
            [YandexAPIService::class, 'getApiService'],
            [V5\AdExtensions::class, 'getAdExtensionsService'],
            [V5\AdGroups::class, 'getAdGroupsService'],
            [V5\AdImages::class, 'getAdImagesService'],
            [V5\Ads::class, 'getAdsService'],
            [V5\AgencyClients::class, 'getAgencyClientsService'],
            [V5\Bids::class, 'getBidsService'],
            [V5\BidModifiers::class, 'getBidModifiersService'],
            [V5\Campaigns::class, 'getCampaignsService'],
            [V5\Changes::class, 'getChangesService'],
            [V5\Clients::class, 'getClientsService'],
            [V5\Dictionaries::class, 'getDictionariesService'],
            [V5\DynamicTextAdTargets::class, 'getDynamicTextAdTargetsService'],
            [V5\Keywords::class, 'getKeywordsService'],
            [V5\KeywordsResearch::class, 'getKeywordsResearchService'],
            [V5\RetargetingLists::class, 'getRetargetingListsService'],
            [V5\Sitelinks::class, 'getSitelinksService'],
            [V5\VCards::class, 'getVCardsService'],
            [V5\Reports::class, 'getReportsService'],
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
