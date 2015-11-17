<?php

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Event\FailCallEvent;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class FailCallEventTest extends TestCase
{
    public function testConstructorAndGetters()
    {
        $user = $this->getUserMock();
        $client = $this->getSoapClientMock();
        $methodName = 'Foo';
        $methodParams = array('FooParam');
        $requestId = 'request-id';
        $exception = new \Exception();

        $client->expects($this->any())
            ->method('getLastRequest')
            ->willReturn('request content');

        $client->expects($this->any())
            ->method('getLastResponse')
            ->willReturn('response content');

        $client->expects($this->any())
            ->method('getRequestId')
            ->willReturn($requestId);

        $event = new FailCallEvent($methodName, $methodParams, $user, $client, $exception);

        $this->assertSame($user, $event->getUser());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($methodParams, $event->getMethodParams());
        $this->assertSame($exception, $event->getException());
        $this->assertSame($requestId, $event->getRequestId());
        $this->assertSame('request content', $event->getRequest());
        $this->assertSame('response content', $event->getResponse());
    }
}
