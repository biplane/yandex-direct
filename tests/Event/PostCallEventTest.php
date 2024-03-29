<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Event\PostCallEvent;

class PostCallEventTest extends TestCase
{
    public function testConstructorAndGetters(): void
    {
        $user = $this->getUserMock();
        $client = $this->getSoapClientMock();
        $methodRef = 'X:Foo';
        $result = 'Any responce';
        $params = ['foo' => 'bar'];
        $requestId = 'request-id';

        $client->method('getLastRequest')->willReturn('request content');
        $client->method('getLastResponse')->willReturn('response content');
        $client->method('getRequestId')->willReturn($requestId);

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
