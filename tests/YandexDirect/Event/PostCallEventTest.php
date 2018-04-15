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

        $client->expects(self::any())
            ->method('getLastRequest')
            ->willReturn('request content');

        $client->expects(self::any())
            ->method('getLastResponse')
            ->willReturn('response content');

        $client->expects(self::any())
            ->method('getRequestId')
            ->willReturn($requestId);

        $event = new PostCallEvent($methodRef, $params, $user, $client, $result);

        self::assertSame($user, $event->getUser());
        self::assertSame($methodRef, $event->getMethodRef());
        self::assertSame('Foo', $event->getMethodName());
        self::assertSame($result, $event->getResult());
        self::assertSame($params, $event->getMethodParams());
        self::assertSame($requestId, $event->getRequestId());
        self::assertSame('request content', $event->getRequest());
        self::assertSame('response content', $event->getResponse());
    }
}
