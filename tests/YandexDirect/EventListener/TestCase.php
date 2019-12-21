<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getEventMock($eventType, $requestId, $request = null, $response = null)
    {
        $mock = $this->createMock('Biplane\\YandexDirect\\Event\\' . $eventType);

        $mock->method('getRequestId')->willReturn($requestId);
        $mock->method('getRequest')->willReturn($request);
        $mock->method('getResponse')->willReturn($response);

        return $mock;
    }
}
