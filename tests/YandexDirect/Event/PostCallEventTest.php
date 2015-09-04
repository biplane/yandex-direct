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
        $methodName = 'Foo';
        $responce = 'Any responce';
        $params = array('foo' => 'bar');
        $requestId = 'request-id';

        $event = new PostCallEvent($methodName, $params, $user, $requestId, $responce);

        $this->assertSame($user, $event->getUser());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($responce, $event->getResponse());
        $this->assertSame($params, $event->getMethodParams());
        $this->assertSame($requestId, $event->getRequestId());
    }
}
