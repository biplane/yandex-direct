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
        $config = $this->getUserMock();
        $methodName = 'Foo';
        $responce = 'Any responce';

        $event = new PostCallEvent($methodName, $config, $responce);

        $this->assertSame($config, $event->getUser());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($responce, $event->getResponse());
    }
}
