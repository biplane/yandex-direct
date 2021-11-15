<?php

declare(strict_types=1);

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Event\FailCallEvent;
use Exception;

class FailCallEventTest extends TestCase
{
    public function testConstructorAndGetters(): void
    {
        $user = $this->getUserMock();
        $client = $this->getSoapClientMock();
        $methodRef = 'X:Foo';
        $methodParams = ['FooParam'];
        $requestId = 'request-id';
        $exception = new Exception();

        $client->method('getLastRequest')->willReturn('request content');
        $client->method('getLastResponse')->willReturn('response content');
        $client->method('getRequestId')->willReturn($requestId);

        $event = new FailCallEvent($methodRef, $methodParams, $user, $client, $exception);

        self::assertSame($user, $event->getUser());
        self::assertSame($methodRef, $event->getMethodRef());
        self::assertSame('Foo', $event->getMethodName());
        self::assertSame($methodParams, $event->getMethodParams());
        self::assertSame($exception, $event->getException());
        self::assertSame($requestId, $event->getRequestId());
        self::assertSame('request content', $event->getRequest());
        self::assertSame('response content', $event->getResponse());
    }
}
