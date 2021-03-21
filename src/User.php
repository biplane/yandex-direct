<?php

namespace Biplane\YandexDirect;

use Biplane\YandexDirect\Api\ApiSoapClientFactory;
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
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @deprecated
 */
class User
{
    public const LOCALE_RU = 'ru';
    public const LOCALE_EN = 'en';
    public const LOCALE_UA = 'ua';

    private $dispatcher;
    private $proxies;
    private $serviceFactory;
    private $config;

    /**
     * @param array<string, mixed>          $options    The options
     * @param EventDispatcherInterface|null $dispatcher The event dispatcher
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $options = [], EventDispatcherInterface $dispatcher = null)
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
     *
     * @return string
     */
    public function getHashCode()
    {
        return md5($this->config->getAccessToken());
    }

    /**
     * Gets the event dispatcher.
     *
     * @return EventDispatcherInterface
     */
    public function getEventDispatcher()
    {
        return $this->dispatcher;
    }

    /**
     * Gets the access token.
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->config->getAccessToken();
    }

    /**
     * Gets the login.
     *
     * @return string|null
     */
    public function getLogin()
    {
        return $this->config->getClientLogin();
    }

    /**
     * Gets the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->config->getLocale(Config::API_5);
    }

    /**
     * Gets the master token for financial operations.
     *
     * @return string|null
     */
    public function getMasterToken()
    {
        return $this->config->getMasterToken();
    }

    /**
     * Determines whether should be used units of agency.
     *
     * @return bool
     */
    public function useOperatorUnits()
    {
        return $this->config->useOperatorUnits();
    }

    /**
     * Gets the proxy for API of version 4 Live.
     *
     * @return YandexAPIService
     */
    public function getApiService()
    {
        return $this->getProxy(YandexAPIService::class);
    }

    /**
     * Gets the proxy of web-service for manage ad's extensions.
     *
     * @return AdExtensions
     */
    public function getAdExtensionsService()
    {
        return $this->getProxy(AdExtensions::class);
    }

    /**
     * Gets the proxy of web-service for manage ad groups.
     *
     * @return AdGroups
     */
    public function getAdGroupsService()
    {
        return $this->getProxy(AdGroups::class);
    }

    /**
     * Gets the proxy of web-service for manage ad images.
     *
     * @return AdImages
     */
    public function getAdImagesService()
    {
        return $this->getProxy(AdImages::class);
    }

    /**
     * Gets the proxy of web-service for manage ads.
     *
     * @return Ads
     */
    public function getAdsService()
    {
        return $this->getProxy(Ads::class);
    }

    /**
     * Gets the proxy of web-service for manage an agency's clients.
     *
     * @return AgencyClients
     */
    public function getAgencyClientsService()
    {
        return $this->getProxy(AgencyClients::class);
    }

    /**
     * Gets the proxy of web-service for manage bids.
     *
     * @return Bids
     */
    public function getBidsService()
    {
        return $this->getProxy(Bids::class);
    }

    /**
     * Gets the proxy of web-service for the adjustments of bids.
     *
     * @return BidModifiers
     */
    public function getBidModifiersService()
    {
        return $this->getProxy(BidModifiers::class);
    }

    /**
     * Gets the proxy of web-service for manage campaigns.
     *
     * @return Campaigns
     */
    public function getCampaignsService()
    {
        return $this->getProxy(Campaigns::class);
    }

    /**
     * Gets the proxy of web-service to check for changes.
     *
     * @return Changes
     */
    public function getChangesService()
    {
        return $this->getProxy(Changes::class);
    }

    /**
     * Gets the proxy of web-service for manage clients.
     *
     * @return Clients
     */
    public function getClientsService()
    {
        return $this->getProxy(Clients::class);
    }

    /**
     * Gets the proxy of web-service for fetch info about dictionaries.
     *
     * @return Dictionaries
     */
    public function getDictionariesService()
    {
        return $this->getProxy(Dictionaries::class);
    }

    /**
     * Gets the proxy of web-service for manage dynamic text ads.
     *
     * @return DynamicTextAdTargets
     */
    public function getDynamicTextAdTargetsService()
    {
        return $this->getProxy(DynamicTextAdTargets::class);
    }

    /**
     * Gets the proxy for service Feeds.
     *
     * @return Feeds
     */
    public function getFeedsService()
    {
        return $this->getProxy(Feeds::class);
    }

    /**
     * Gets the proxy of web-service for manage bids for keywords.
     *
     * @return KeywordBids
     */
    public function getKeywordBidsService()
    {
        return $this->getProxy(KeywordBids::class);
    }

    /**
     * Gets the proxy of web-service for manage keywords.
     *
     * @return Keywords
     */
    public function getKeywordsService()
    {
        return $this->getProxy(Keywords::class);
    }

    /**
     * Gets the proxy of web-service to get forecast of impressions for keywords.
     *
     * @return KeywordsResearch
     */
    public function getKeywordsResearchService()
    {
        return $this->getProxy(KeywordsResearch::class);
    }

    /**
     * Gets the proxy of web-service to manage submissed data from the turbo-pages.
     *
     * @return Leads
     */
    public function getLeadsService()
    {
        return $this->getProxy(Leads::class);
    }

    /**
     * Gets the proxy of web-service to manage shared sets of negative keywords.
     *
     * @return NegativeKeywordSharedSets
     */
    public function getNegativeKeywordSharedSetsService()
    {
        return $this->getProxy(NegativeKeywordSharedSets::class);
    }

    /**
     * Gets the proxy of web-service for manage lists of retargeting.
     *
     * @return RetargetingLists
     */
    public function getRetargetingListsService()
    {
        return $this->getProxy(RetargetingLists::class);
    }

    /**
     * Gets the proxy of web-service for manage sitelinks.
     *
     * @return Sitelinks
     */
    public function getSitelinksService()
    {
        return $this->getProxy(Sitelinks::class);
    }

    /**
     * Gets the proxy for service SmartAdTargets.
     *
     * @return SmartAdTargets
     */
    public function getSmartAdTargetsService()
    {
        return $this->getProxy(SmartAdTargets::class);
    }

    /**
     * Gets the proxy of web-service for manage the turbo-pages.
     *
     * @return TurboPages
     */
    public function getTurboPagesService()
    {
        return $this->getProxy(TurboPages::class);
    }

    /**
     * Gets the proxy of web-service for manage VCards.
     *
     * @return VCards
     */
    public function getVCardsService()
    {
        return $this->getProxy(VCards::class);
    }

    /**
     * Gets the reports service.
     *
     * @return Reports
     */
    public function getReportsService()
    {
        return $this->getProxy(Reports::class);
    }

    /**
     * Gets the AudienceTargets service.
     *
     * @return AudienceTargets
     */
    public function getAudienceTargetsService()
    {
        return $this->getProxy(AudienceTargets::class);
    }

    /**
     * Creates the finance token.
     *
     * @param string $methodName   The API method for which needed it token
     * @param int    $operationNum A number of operation
     *
     * @throws \LogicException When the master token is empty
     *
     * @return string
     */
    public function createFinanceToken($methodName, $operationNum)
    {
        throw new \BadMethodCallException('Not used any more');
    }

    /**
     * Resolves the URI to WSDL.
     *
     * @param string $uri The origin URI to WSDL file
     *
     * @return string
     */
    public function resolveWsdl($uri)
    {
        throw new \BadMethodCallException('Not used any more');
    }

    /**
     * Gets the generic options for the SOAP client.
     *
     * @return array
     */
    public function getSoapOptions()
    {
        throw new \BadMethodCallException('Not used any more');
    }

    public function setServiceFactory(ApiSoapClientFactory $serviceFactory): void
    {
        $this->serviceFactory = $serviceFactory;
    }

    private function getProxy(string $serviceClass)
    {
        if (isset($this->proxies[$serviceClass])) {
            return $this->proxies[$serviceClass];
        }

        if ($serviceClass === Reports::class) {
            $service = new $serviceClass($this);
        } else {
            if ($this->serviceFactory === null) {
                $this->serviceFactory = new ApiSoapClientFactory();
            }

            $service = $this->serviceFactory->createSoapClient($this->config, $serviceClass);

            if ($this->dispatcher !== null) {
                $service->setEventEmitter(new EventEmitter($this->dispatcher, $this));
            }
        }

        return $this->proxies[$serviceClass] = $service;
    }
}
