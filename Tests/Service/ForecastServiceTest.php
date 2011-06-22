<?php

namespace Biplane\YandexDirectBundle\Tests\Service;

use Biplane\YandexDirectBundle\Contract;
use Biplane\YandexDirectBundle\Service\ForecastService;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class ForecastServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $apiService;
    /**
     * @var \Biplane\YandexDirectBundle\Service\ForecastService
     */
    private $service;

    protected function setUp()
    {
        $this->apiService = $this->getMockBuilder('Biplane\\YandexDirectBundle\\Proxy\\YandexApiService')
            ->disableOriginalConstructor()
            ->getMock();

        $this->service = new ForecastService($this->apiService);
    }

    public function testCreateForecast()
    {
        $phrases = array(
            'купить слона',
            'ремонт компьютера',
            'букет'
        );

        $this->apiService
            ->expects($this->once())
            ->method('createNewForecast')
            ->with($this->equalTo(new Contract\NewForecastInfo(null, array(), $phrases)));

        $this->service->create($phrases);
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsRaisedWhenArrayOfPhrasesIsLarger()
    {
        $this->apiService
            ->expects($this->never())
            ->method('createNewForecast');

        $this->service->create(range(1, ForecastService::MAX_PHRASES + 15));
    }

    public function testGetForecast()
    {
        $forecastId = 7;
        $forecastInfo = new Contract\GetForecastInfo();

        $this->apiService
            ->expects($this->once())
            ->method('getForecast')
            ->with($this->equalTo($forecastId))
            ->will($this->returnValue($forecastInfo));

        $this->apiService
            ->expects($this->once())
            ->method('deleteForecastReport')
            ->with($this->equalTo($forecastId));

        $this->assertEquals($forecastInfo, $this->service->get($forecastId));
    }

    public function testDetermineIsFullQueue()
    {
        $fullQueue = range(1, ForecastService::MAX_QUEUE);

        $this->apiService
            ->expects($this->exactly(2))
            ->method('getForecastList')
            ->will($this->onConsecutiveCalls(array(), $fullQueue));

        $this->assertFalse($this->service->isFullQueue(), '->isFullQueue() returns false if queue size 0.');
        $this->assertTrue($this->service->isFullQueue(), sprintf('->isFullQueue() returns true if queue size %d.', count($fullQueue)));
    }

    public function testForecastIsReady()
    {
        $forecastId = 7;

        $this->apiService
            ->expects($this->once())
            ->method('getForecastList')
            ->will($this->returnValue(array(
                $this->createForecastStatus($forecastId)
            )));

        $this->assertTrue($this->service->isReady($forecastId));
    }

    public function testForecastIsNotReady()
    {
        $forecastId = 7;

        $this->apiService
            ->expects($this->once())
            ->method('getForecastList')
            ->will($this->returnValue(array(
                $this->createForecastStatus($forecastId, false)
            )));

        $this->assertFalse($this->service->isReady($forecastId));
    }

    /**
     * @expectedException \LogicException
     */
    public function testExceptionIsRaisedWhenForecastNotFound()
    {
        $this->apiService
            ->expects($this->once())
            ->method('getForecastList')
            ->will($this->returnValue(array()));

        $this->service->isReady(1);
    }

    /**
     * @expectedException \InvalidArgumentException
     * @covers \Biplane\YandexDirectBundle\Service\ForecastService::checkForecastId
     */
    public function testExceptionIsRaisedWhenForecastIdIsNotInteger()
    {
        $this->service->get('3');
    }

    /**
     * @expectedException \InvalidArgumentException
     * @covers \Biplane\YandexDirectBundle\Service\ForecastService::checkForecastId
     */
    public function testExceptionIsRaisedWhenForecastIdLessThanOne()
    {
        $this->service->get(0);
    }


    private function createForecastStatus($forecastId, $done = true)
    {
        $forecastStatus = new Contract\ForecastStatusInfo();
        $forecastStatus
            ->setForecastID($forecastId)
            ->setStatusForecast($done ? Contract\ForecastStatusInfo::STATUS_DONE : Contract\ForecastStatusInfo::STATUS_PENDING);

        return $forecastStatus;
    }
}