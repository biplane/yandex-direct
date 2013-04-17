<?php

namespace Biplane\YandexDirectBundle\Tests\Proxy;

use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Events;
use Biplane\YandexDirectBundle\Event\PreCallEvent;
use Biplane\YandexDirectBundle\Event\PostCallEvent;
use Biplane\YandexDirectBundle\Event\FailCallEvent;

/**
 * YandexApiServiceTest.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class YandexApiServiceTest extends \PHPUnit_Framework_TestCase
{
    const PROFILE = 'profile_name';

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $client;

    private $service;

    /**
     * @dataProvider apiServiceMethodsProvider
     */
    public function testInvokeApiMethod($method, $params = array(), $success = true)
    {
        $preEvent = new PreCallEvent($this->service, ucfirst($method), self::PROFILE);

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(Events::BEFORE_REQUEST, $preEvent);

        if ($success) {
            $stub = $this->returnValue($response = $this->createApiResult());
            $eventName = Events::AFTER_REQUEST;
            $event = new PostCallEvent($this->service, ucfirst($method), self::PROFILE, $response);

        } else {
            $stub = $this->throwException($ex = new \RuntimeException());
            $eventName = Events::FAIL_REQUEST;
            $event = new FailCallEvent($this->service, ucfirst($method), self::PROFILE, $ex);
        }

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with($eventName, $event);

        $this->client->expects($this->once())
            ->method('invoke')
            ->with(ucfirst($method), is_array($params) ? $params : array($params))
            ->will($stub);

        try {
            $returned = $this->service->$method($params);
        } catch (\RuntimeException $ex) {
            if ($success) {
                throw $ex;
            }
        }

        if ($success) {
            $this->assertSame($response, $returned);
        }
    }

    public function apiServiceMethodsProvider()
    {
        return array(
            array('getVersion'),
            array('getVersion', array(), false),
            array('getClientsList', new Contract\ClientInfoRequest()),
            array('getClientsList', new Contract\ClientInfoRequest(), false),
            array('getSubClients', new Contract\GetSubClientsRequest()),
            array('getSubClients', new Contract\GetSubClientsRequest(), false),
            array('setAutoPrice', new Contract\AutoPriceInfo()),
            array('setAutoPrice', new Contract\AutoPriceInfo(), false),
            array('getCampaignParams', $campaignIdInfo = new Contract\CampaignIDInfo()),
            array('getCampaignParams', $campaignIdInfo, false),
            array('getCampaignsParams', new Contract\CampaignIDSInfo()),
            array('getCampaignsParams', new Contract\CampaignIDSInfo(), false),
            array('deleteForecastReport', 3),
            array('deleteForecastReport', 3, false),
            array('moderateBanners', $campaignBids = new Contract\CampaignBidsInfo()),
            array('moderateBanners', $campaignBids, false),
            array('stopBanners', $campaignBids),
            array('stopBanners', $campaignBids, false),
            array('resumeBanners', $campaignBids),
            array('resumeBanners', $campaignBids, false),
            array('archiveBanners', $campaignBids),
            array('archiveBanners', $campaignBids, false),
            array('unArchiveBanners', $campaignBids),
            array('unArchiveBanners', $campaignBids, false),
            array('deleteBanners', $campaignBids),
            array('deleteBanners', $campaignBids, false),
            array('stopCampaign', $campaignIdInfo),
            array('stopCampaign', $campaignIdInfo, false),
            array('deleteCampaign', $campaignIdInfo),
            array('deleteCampaign', $campaignIdInfo, false),
            array('unArchiveCampaign', $campaignIdInfo),
            array('unArchiveCampaign', $campaignIdInfo, false),
            array('resumeCampaign', $campaignIdInfo),
            array('resumeCampaign', $campaignIdInfo, false),
            array('getReportList'),
            array('getReportList', array(), false),
            array('pingAPI'),
            array('pingAPI', array(), false),
//            array('getClientsUnits', array(1)),
//            array('getClientsUnits', array(), false),
//            array('getClientInfo', array()),
//            array('getClientInfo', array(), false),
//            array('updateClientInfo', array()),
//            array('updateClientInfo', array(), false),
//            array('getBanners', new Contract\GetBannersInfo()),
//            array('getBanners', new Contract\GetBannersInfo(), false),
//            array('getCampaignsList'),
//            array('getCampaignsList', array(), false),
//            array('getCampaignsListFilter', new Contract\GetCampaignsInfo()),
//            array('getCampaignsListFilter', new Contract\GetCampaignsInfo(), false),
//            array('getBalance', array()),
//            array('getBalance', array(), false),
//            array('getBannerPhrases', array()),
//            array('getBannerPhrases', array(), false),
//            array('getBannerPhrasesFilter', new Contract\BannerPhrasesFilterRequestInfo()),
//            array('getBannerPhrasesFilter', new Contract\BannerPhrasesFilterRequestInfo(), false),
//            array('getRegions'),
//            array('getRegions', array(), false),
//            array('createNewReport', new Contract\NewReportInfo()),
//            array('createNewReport', new Contract\NewReportInfo(), false),
//            array('getBannersStat', new Contract\NewReportInfo()),
//            array('getBannersStat', new Contract\NewReportInfo(), false),
//            array('createNewForecast', new Contract\NewForecastInfo()),
//            array('createNewForecast', new Contract\NewForecastInfo(), false),
//            array('getForecast', 5),
//            array('getForecast', 5, false),
//            array('getRubrics'),
//            array('getRubrics', array(), false),
//            array('getTimeZones'),
//            array('getTimeZones', array(), false),
//            array('getForecastList'),
//            array('getForecastList', array(), false),
//            array('updatePrices', array()),
//            array('updatePrices', array(), false),
//            array('createOrUpdateCampaign', new Contract\CampaignInfo()),
//            array('createOrUpdateCampaign', new Contract\CampaignInfo(), false),
//            array('createOrUpdateBanners', array()),
//            array('createOrUpdateBanners', array(), false),
//            array('getAvailableVersions'),
//            array('getAvailableVersions', array(), false),
//            array('getKeywordsSuggestion', new Contract\KeywordsSuggestionInfo()),
//            array('getKeywordsSuggestion', new Contract\KeywordsSuggestionInfo(), false),
//            array('createNewSubclient', new Contract\CreateNewSubclientRequest()),
//            array('createNewSubclient', new Contract\CreateNewSubclientRequest(), false),
//            array('createNewWordstatReport', new Contract\NewWordstatReportInfo()),
//            array('createNewWordstatReport', new Contract\NewWordstatReportInfo(), false),
//            array('getWordstatReportList'),
//            array('getWordstatReportList', array(), false),
//            array('getWordstatReport', 1),
//            array('getWordstatReport', 1, false),
//            array('deleteWordstatReport', 2),
//            array('deleteWordstatReport', 2, false),
//            array('getStatGoals', new Contract\StatGoalsCampaignIDInfo()),
//            array('getStatGoals', new Contract\StatGoalsCampaignIDInfo(), false),
//            array('getChanges', new Contract\GetChangesRequest()),
//            array('getChanges', new Contract\GetChangesRequest(), false),
//            array('transferMoney', new Contract\TransferMoneyInfo()),
//            array('transferMoney', new Contract\TransferMoneyInfo(), false),
//            array('getCreditLimits'),
//            array('getCreditLimits', array(), false),
//            array('createInvoice', new Contract\CreateInvoiceInfo()),
//            array('createInvoice', new Contract\CreateInvoiceInfo(), false),
//            array('payCampaigns', new Contract\PayCampaignsInfo()),
//            array('payCampaigns', new Contract\PayCampaignsInfo(), false),
//            array('getEventsLog', new Contract\GetEventsLogRequest()),
//            array('getEventsLog', new Contract\GetEventsLogRequest(), false),
//            array('getCampaignsTags', new Contract\CampaignIDSInfo()),
//            array('getCampaignsTags', new Contract\CampaignIDSInfo(), false),
//            array('updateCampaignsTags', array()),
//            array('updateCampaignsTags', array(), false),
//            array('getBannersTags', new Contract\BannersRequestInfo()),
//            array('getBannersTags', new Contract\BannersRequestInfo(), false),
//            array('updateBannersTags', array()),
//            array('updateBannersTags', array(), false),
        );
    }

    protected function setUp()
    {
        $this->dispatcher = $this->getMock('Symfony\\Component\\EventDispatcher\\EventDispatcherInterface');
        $this->client = $this->getMock('Biplane\\YandexDirectBundle\\Proxy\\Client\\ClientInterface');

        $this->service = new YandexApiService($this->dispatcher, $this->client, self::PROFILE);
    }

    protected function tearDown()
    {
        unset($this->dispatcher, $this->client, $this->service);
    }

    /**
     * @return \PHPUnit_Framework_TestResult|\stdClass
     */
    private function createApiResult()
    {
        return new \stdClass();
    }
}
