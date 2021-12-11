<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect;

use Biplane\YandexDirect\Api\Finance\TransactionNumberGenerator\CallbackTransactionNumberGenerator;
use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5;
use Biplane\YandexDirect\Soap\ApiSoapClient;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\TestCase;
use Symfony\Component\EventDispatcher\EventDispatcher;

class UserTest extends TestCase
{
    public function testEventDispatcherShouldBeCreatedWhenNotGiven(): void
    {
        $user = new User(['access_token' => 'foo']);

        self::assertInstanceOf(EventDispatcher::class, $user->getEventDispatcher());
    }

    /**
     * @return array<array{class-string<ApiSoapClient>|class-string<V5\Reports>, string}>
     */
    public function getServicesProxies(): array
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
     * @param class-string<ApiSoapClient>|class-string<V5\Reports> $serviceClass
     *
     * @dataProvider getServicesProxies
     */
    public function testServiceProxyShouldBeInstantiated(string $serviceClass, string $method): void
    {
        $user = new User(['access_token' => 'foo']);

        self::assertInstanceOf($serviceClass, $user->$method());
    }

    public function testServiceProxyShouldBeCached(): void
    {
        $user = new User(['access_token' => 'foo']);

        $proxy = $user->getAdsService();

        self::assertSame($proxy, $user->getAdsService());
    }

    public function testPassCustomTransactionNumberGenerator(): void
    {
        $user = new User(['access_token' => 'foo']);
        $user->setFinanceOperationNumberGenerator(static function (): int {
            return 123;
        });

        $generator = $user->getApiService()->getTransactionNumberGenerator();

        self::assertInstanceOf(CallbackTransactionNumberGenerator::class, $generator);
        self::assertSame(123, $generator->generate());
    }
}
