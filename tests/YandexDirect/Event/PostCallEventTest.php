<?php

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Event\PostCallEvent;

class PostCallEventTest extends TestCase
{
    public function testConstructorAndGetters()
    {
        $user = $this->getUserMock();
        $client = $this->getSoapClientMock();
        $methodRef = 'X:Foo';
        $result = 'Any responce';
        $params = ['foo' => 'bar'];
        $requestId = 'request-id';

        $client->expects($this->any())
            ->method('getLastRequest')
            ->willReturn('request content');

        $client->expects($this->any())
            ->method('getLastResponse')
            ->willReturn('response content');

        $client->expects($this->any())
            ->method('getRequestId')
            ->willReturn($requestId);

        $event = new PostCallEvent($methodRef, $params, $user, $client, $result);

        $this->assertSame($user, $event->getUser());
        $this->assertSame($methodRef, $event->getMethodRef());
        $this->assertSame('Foo', $event->getMethodName());
        $this->assertSame($result, $event->getResult());
        $this->assertSame($params, $event->getMethodParams());
        $this->assertSame($requestId, $event->getRequestId());
        $this->assertSame('request content', $event->getRequest());
        $this->assertSame('response content', $event->getResponse());
    }
}
