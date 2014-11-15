<?php

namespace Biplane\YandexDirectBundle\Tests\Event;

use Biplane\YandexDirectBundle\Event\PostCallEvent;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class PostCallEventTest extends TestCase
{
    public function testConstructorAndGetters()
    {
        $api = $this->getApiMock();
        $config = $this->getConfigurationMock();
        $methodName = 'Foo';
        $responce = 'Any responce';

        $event = new PostCallEvent($api, $methodName, $config, $responce);

        $this->assertSame($api, $event->getApiService());
        $this->assertSame($config, $event->getConfiguration());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($responce, $event->getResponse());
    }
}
