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
        $methodName = 'Foo';
        $methodParams = array('FooParam');
        $exception = new \Exception();

        $event = new FailCallEvent($methodName, $user, $methodParams, $exception);

        $this->assertSame($user, $event->getUser());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($methodParams, $event->getMethodParams());
        $this->assertSame($exception, $event->getException());
    }
}
