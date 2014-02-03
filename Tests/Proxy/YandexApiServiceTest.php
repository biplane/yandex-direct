<?php

namespace Biplane\YandexDirectBundle\Tests\Proxy;

use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Events;
use Biplane\YandexDirectBundle\Event\PreCallEvent;
use Biplane\YandexDirectBundle\Event\PostCallEvent;
use Biplane\YandexDirectBundle\Event\FailCallEvent;

/**
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class YandexApiServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $client;

    /**
     * @var YandexApiService
     */
    private $service;

    /**
     * @dataProvider apiServiceMethodsProvider
     */
    public function testInvokeApiMethod($method, $params = array(), $success = true)
    {
        $login = 'foo';

        $this->client->expects($this->any())
            ->method('getLogin')
            ->will($this->returnValue($login));

        $preEvent = new PreCallEvent($this->service, ucfirst($method), $login);

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(Events::BEFORE_REQUEST, $preEvent);

        if ($success) {
            $stub = $this->returnValue($response = $this->createApiResult());
            $eventName = Events::AFTER_REQUEST;
            $event = new PostCallEvent($this->service, ucfirst($method), $login, $response);
        } else {
            $stub = $this->throwException($ex = new \RuntimeException());
            $eventName = Events::FAIL_REQUEST;
            $event = new FailCallEvent($this->service, ucfirst($method), $login, $ex);
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
        );
    }

    protected function setUp()
    {
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
        $this->client = $this->getMock('Biplane\YandexDirectBundle\Proxy\Client\ClientInterface');

        $this->service = new YandexApiService($this->dispatcher, $this->client);
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
