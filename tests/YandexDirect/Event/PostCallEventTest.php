<?php

namespace Biplane\Tests\YandexDirect\Event;

use Biplane\YandexDirect\Event\PostCallEvent;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class PostCallEventTest extends TestCase
{
    public function testConstructorAndGetters()
    {
        $user = $this->getUserMock();
        $client = $this->getSoapClientMock();
        $methodName = 'Foo';
        $result = 'Any responce';
        $params = array('foo' => 'bar');
        $requestId = 'request-id';

        $client->expects($this->any())
            ->method('getLastRequest')
            ->willReturn('request content');

        $client->expects($this->any())
            ->method('getLastResponse')
            ->willReturn('response content');

        $event = new PostCallEvent($methodName, $params, $user, $requestId, $client, $result);

        $this->assertSame($user, $event->getUser());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($result, $event->getResult());
        $this->assertSame($params, $event->getMethodParams());
        $this->assertSame($requestId, $event->getRequestId());
        $this->assertSame('request content', $event->getRequest());
        $this->assertSame('response content', $event->getResponse());
    }
}
