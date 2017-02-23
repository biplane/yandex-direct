<?php

namespace Biplane\Tests\YandexDirect\EventListener;

class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function getEventMock($eventType, $requestId, $request = null, $response = null)
    {
        $mock = $this->getMockBuilder('Biplane\\YandexDirect\\Event\\' . $eventType)
            ->disableOriginalConstructor()
            ->getMock();

        $mock->expects($this->any())
            ->method('getRequestId')
            ->willReturn($requestId);

        $mock->expects($this->any())
            ->method('getRequest')
            ->willReturn($request);

        $mock->expects($this->any())
            ->method('getResponse')
            ->willReturn($response);

        return $mock;
    }
}
