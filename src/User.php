<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

use BadMethodCallException;
use Biplane\YandexDirect\Api\ApiSoapClient;
use Biplane\YandexDirect\Api\ApiSoapClientFactory;
use Biplane\YandexDirect\Api\Finance\CallbackTransactionNumberGenerator;
use Biplane\YandexDirect\Api\Finance\TransactionNumberGeneratorInterface;
use Biplane\YandexDirect\Api\ReportServiceFactory;
use Biplane\YandexDirect\Api\V4\YandexAPIService;
use Biplane\YandexDirect\Api\V5\AdExtensions;
use Biplane\YandexDirect\Api\V5\AdGroups;
use Biplane\YandexDirect\Api\V5\AdImages;
use Biplane\YandexDirect\Api\V5\Ads;
use Biplane\YandexDirect\Api\V5\AgencyClients;
use Biplane\YandexDirect\Api\V5\AudienceTargets;
use Biplane\YandexDirect\Api\V5\BidModifiers;
use Biplane\YandexDirect\Api\V5\Bids;
use Biplane\YandexDirect\Api\V5\Campaigns;
use Biplane\YandexDirect\Api\V5\Changes;
use Biplane\YandexDirect\Api\V5\Clients;
use Biplane\YandexDirect\Api\V5\Dictionaries;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets;
use Biplane\YandexDirect\Api\V5\Feeds;
use Biplane\YandexDirect\Api\V5\KeywordBids;
use Biplane\YandexDirect\Api\V5\Keywords;
use Biplane\YandexDirect\Api\V5\KeywordsResearch;
use Biplane\YandexDirect\Api\V5\Leads;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets;
use Biplane\YandexDirect\Api\V5\Reports;
use Biplane\YandexDirect\Api\V5\RetargetingLists;
use Biplane\YandexDirect\Api\V5\Sitelinks;
use Biplane\YandexDirect\Api\V5\SmartAdTargets;
use Biplane\YandexDirect\Api\V5\TurboPages;
use Biplane\YandexDirect\Api\V5\VCards;
use Biplane\YandexDirect\Event\EventEmitter;
use InvalidArgumentException;
use LogicException;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

use function is_callable;
use function md5;

/**
 * @deprecated
 */
class User
{
    public const LOCALE_RU = 'ru';
    public const LOCALE_EN = 'en';
    public const LOCALE_UA = 'ua';

    /** @var EventDispatcherInterface */
    private $dispatcher;

    /** @var array<string, ApiSoapClient|Reports> */
    private $proxies;

    /** @var ApiSoapClientFactory|null */
    private $soapClientFactory;

    /** @var ReportServiceFactory|null */
    private $reportServiceFactory;

    /** @var Config */
    private $config;

    /** @var TransactionNumberGeneratorInterface|null */
    private $transactionNumberGenerator;

    /**
     * @param array<string, mixed>          $options    The options
     * @param EventDispatcherInterface|null $dispatcher The event dispatcher
     *
     * @throws InvalidArgumentException
     */
    public function __construct(array $options = [], ?EventDispatcherInterface $dispatcher = null)
    {
        if (isset($options['login'])) {
            $options['client_login'] = $options['login'];
            unset($options['login']);
        }

        if ($dispatcher === null) {
            $dispatcher = new EventDispatcher();
        }

        $this->config = new Config($options);
        $this->dispatcher = $dispatcher;
        $this->proxies = [];
    }

    /**
     * Gets the hash code of this object.
     */
    public function getHashCode(): string
    {
        return md5($this->config->getAccessToken());
    }

    /**
     * Gets the event dispatcher.
     */
    public function getEventDispatcher(): EventDispatcherInterface
    {
        return $this->dispatcher;
    }

    /**
     * Gets the access token.
     */
    public function getAccessToken(): string
    {
        return $this->config->getAccessToken();
    }

    /**
     * Gets the login.
     */
    public function getLogin(): ?string
    {
        return $this->config->getClientLogin();
    }

    /**
     * Gets the locale.
     */
    public function getLocale(): string
    {
        return $this->config->getLocale(Config::API_5);
    }

    /**
     * Gets the master token for financial operations.
     */
    public function getMasterToken(): ?string
    {
        return $this->config->getMasterToken();
    }

    /**
     * Determines whether should be used units of agency.
     */
    public function useOperatorUnits(): bool
    {
        return $this->config->useOperatorUnits();
    }

    /**
     * Sets callable as generator for `operation_num` field of finance operations.
     */
    public function setFinanceOperationNumberGenerator(callable $financeNumberGenerator): void
    {
        if (! is_callable($financeNumberGenerator)) {
            throw new LogicException('Finance operation number generator should be callable.');
        }

        $this->transactionNumberGenerator = new CallbackTransactionNumberGenerator($financeNumberGenerator);
    }

    /**
     * Gets the proxy for API of version 4 Live.
     */
    public function getApiService(): YandexAPIService
    {
        return $this->getProxy(YandexAPIService::class);
    }

    /**
     * Gets the proxy of web-service for manage ad's extensions.
     */
    public function getAdExtensionsService(): AdExtensions
    {
        return $this->getProxy(AdExtensions::class);
    }

    /**
     * Gets the proxy of web-service for manage ad groups.
     */
    public function getAdGroupsService(): AdGroups
    {
        return $this->getProxy(AdGroups::class);
    }

    /**
     * Gets the proxy of web-service for manage ad images.
     */
    public function getAdImagesService(): AdImages
    {
        return $this->getProxy(AdImages::class);
    }

    /**
     * Gets the proxy of web-service for manage ads.
     */
    public function getAdsService(): Ads
    {
        return $this->getProxy(Ads::class);
    }

    /**
     * Gets the proxy of web-service for manage an agency's clients.
     */
    public function getAgencyClientsService(): AgencyClients
    {
        return $this->getProxy(AgencyClients::class);
    }

    /**
     * Gets the proxy of web-service for manage bids.
     */
    public function getBidsService(): Bids
    {
        return $this->getProxy(Bids::class);
    }

    /**
     * Gets the proxy of web-service for the adjustments of bids.
     */
    public function getBidModifiersService(): BidModifiers
    {
        return $this->getProxy(BidModifiers::class);
    }

    /**
     * Gets the proxy of web-service for manage campaigns.
     */
    public function getCampaignsService(): Campaigns
    {
        return $this->getProxy(Campaigns::class);
    }

    /**
     * Gets the proxy of web-service to check for changes.
     */
    public function getChangesService(): Changes
    {
        return $this->getProxy(Changes::class);
    }

    /**
     * Gets the proxy of web-service for manage clients.
     */
    public function getClientsService(): Clients
    {
        return $this->getProxy(Clients::class);
    }

    /**
     * Gets the proxy of web-service for fetch info about dictionaries.
     */
    public function getDictionariesService(): Dictionaries
    {
        return $this->getProxy(Dictionaries::class);
    }

    /**
     * Gets the proxy of web-service for manage dynamic text ads.
     */
    public function getDynamicTextAdTargetsService(): DynamicTextAdTargets
    {
        return $this->getProxy(DynamicTextAdTargets::class);
    }

    /**
     * Gets the proxy for service Feeds.
     */
    public function getFeedsService(): Feeds
    {
        return $this->getProxy(Feeds::class);
    }

    /**
     * Gets the proxy of web-service for manage bids for keywords.
     */
    public function getKeywordBidsService(): KeywordBids
    {
        return $this->getProxy(KeywordBids::class);
    }

    /**
     * Gets the proxy of web-service for manage keywords.
     */
    public function getKeywordsService(): Keywords
    {
        return $this->getProxy(Keywords::class);
    }

    /**
     * Gets the proxy of web-service to get forecast of impressions for keywords.
     */
    public function getKeywordsResearchService(): KeywordsResearch
    {
        return $this->getProxy(KeywordsResearch::class);
    }

    /**
     * Gets the proxy of web-service to manage submissed data from the turbo-pages.
     */
    public function getLeadsService(): Leads
    {
        return $this->getProxy(Leads::class);
    }

    /**
     * Gets the proxy of web-service to manage shared sets of negative keywords.
     */
    public function getNegativeKeywordSharedSetsService(): NegativeKeywordSharedSets
    {
        return $this->getProxy(NegativeKeywordSharedSets::class);
    }

    /**
     * Gets the proxy of web-service for manage lists of retargeting.
     */
    public function getRetargetingListsService(): RetargetingLists
    {
        return $this->getProxy(RetargetingLists::class);
    }

    /**
     * Gets the proxy of web-service for manage sitelinks.
     */
    public function getSitelinksService(): Sitelinks
    {
        return $this->getProxy(Sitelinks::class);
    }

    /**
     * Gets the proxy for service SmartAdTargets.
     */
    public function getSmartAdTargetsService(): SmartAdTargets
    {
        return $this->getProxy(SmartAdTargets::class);
    }

    /**
     * Gets the proxy of web-service for manage the turbo-pages.
     */
    public function getTurboPagesService(): TurboPages
    {
        return $this->getProxy(TurboPages::class);
    }

    /**
     * Gets the proxy of web-service for manage VCards.
     */
    public function getVCardsService(): VCards
    {
        return $this->getProxy(VCards::class);
    }

    /**
     * Gets the reports service.
     */
    public function getReportsService(): Reports
    {
        return $this->getProxy(Reports::class);
    }

    /**
     * Gets the AudienceTargets service.
     */
    public function getAudienceTargetsService(): AudienceTargets
    {
        return $this->getProxy(AudienceTargets::class);
    }

    /**
     * Creates the finance token.
     *
     * @param string $methodName   The API method for which needed it token
     * @param int    $operationNum A number of operation
     *
     * @throws LogicException When the master token is empty.
     */
    public function createFinanceToken(string $methodName, int $operationNum): string
    {
        throw new BadMethodCallException('Not used any more');
    }

    /**
     * Resolves the URI to WSDL.
     *
     * @param string $uri The origin URI to WSDL file
     */
    public function resolveWsdl(string $uri): string
    {
        throw new BadMethodCallException('Not used any more');
    }

    // phpcs:disable Squiz.Commenting.FunctionComment.InvalidNoReturn

    /**
     * Gets the generic options for the SOAP client.
     *
     * @return array<mixed>
     */
    public function getSoapOptions(): array
    {
        throw new BadMethodCallException('Not used any more');
    }

    // phpcs:enable Squiz.Commenting.FunctionComment.InvalidNoReturn

    public function setServiceFactory(ApiSoapClientFactory $soapClientFactory): void
    {
        $this->soapClientFactory = $soapClientFactory;
    }

    public function setReportServiceFactory(ReportServiceFactory $reportServiceFactory): void
    {
        $this->reportServiceFactory = $reportServiceFactory;
    }

    /**
     * @psalm-param class-string<T> $serviceClass
     *
     * @psalm-return T
     *
     * @template T
     */
    private function getProxy(string $serviceClass)
    {
        if (isset($this->proxies[$serviceClass])) {
            return $this->proxies[$serviceClass];
        }

        if ($serviceClass === Reports::class) {
            if ($this->reportServiceFactory === null) {
                $this->reportServiceFactory = new ReportServiceFactory();
            }

            $service = $this->reportServiceFactory->create($this->config);
        } else {
            if ($this->soapClientFactory === null) {
                $this->soapClientFactory = new ApiSoapClientFactory(null, $this->transactionNumberGenerator);
            }

            $service = $this->soapClientFactory->createSoapClient($this->config, $serviceClass);

            if ($this->dispatcher !== null) {
                $service->setEventEmitter(new EventEmitter($this->dispatcher, $this));
            }
        }

        return $this->proxies[$serviceClass] = $service;
    }
}
