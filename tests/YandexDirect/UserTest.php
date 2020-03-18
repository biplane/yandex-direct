<?php

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;

class UserTest extends TestCase
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

        self::assertSame($locale, $config->getLocale());
    }

    public function testLoginShouldBeNormalized()
    {
        $config = new User([
            'login' => 'p.g.Ivanov',
            'access_token' => 'foo',
        ]);

        self::assertEquals('p-g-ivanov', $config->getLogin());
    }

    public function testThrowExceptionWhenSetMasterTokenAndLoginIsMissing()
    {
        $this->expectException(\InvalidArgumentException::class);

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

        self::assertSame('foo', $config->getMasterToken());
        self::assertSame('bar', $config->getLogin());
    }

    public function testFinanceTokenShouldBeCreated()
    {
        $config = new User([
            'master_token' => 't0ken',
            'login' => 'log1n',
            'access_token' => 'foo',
        ]);

        self::assertEquals(
            'ca556216659079c5e21ae6647560b3d4ad94b950a2d613974ab934e0a9f54d7d',
            $config->createFinanceToken('foo', 1)
        );
    }

    public function testHashCodeShouldBeGenerated()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        self::assertEquals('acbd18db4cc2f85cedef654fccc4a4d8', $user->getHashCode());
    }

    public function testEventDispatcherShouldBeCreatedWhenNotGiven()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        self::assertInstanceOf(EventDispatcher::class, $user->getEventDispatcher());
    }

    public function testApiServiceShouldBeCreated()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        self::assertInstanceOf(YandexAPIService::class, $user->getApiService());
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
            [V5\Feeds::class, 'getFeedsService'],
            [V5\KeywordBids::class, 'getKeywordBidsService'],
            [V5\Keywords::class, 'getKeywordsService'],
            [V5\KeywordsResearch::class, 'getKeywordsResearchService'],
            [V5\Leads::class, 'getLeadsService'],
            [V5\NegativeKeywordSharedSets::class, 'getNegativeKeywordSharedSetsService'],
            [V5\RetargetingLists::class, 'getRetargetingListsService'],
            [V5\Sitelinks::class, 'getSitelinksService'],
            [V5\SmartAdTargets::class, 'getSmartAdTargetsService'],
            [V5\TurboPages::class, 'getTurboPagesService'],
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

        self::assertInstanceOf($serviceClass, $user->$method());
    }

    public function testServiceProxyShouldBeCached()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        $proxy = $user->getAdsService();

        self::assertSame($proxy, $user->getAdsService());
    }

    public function testResolveWSDLWhenSandboxIsDisabled()
    {
        $user = new User([
            'access_token' => 'foo',
        ]);

        self::assertEquals(
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

        self::assertEquals(
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

        self::assertTrue($user->useOperatorUnits());
    }
}
