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
        $api = $this->getApiMock();
        $config = $this->getConfigurationMock();
        $methodName = 'Foo';
        $methodParams = array('FooParam');
        $exception = new \Exception();

        $event = new FailCallEvent($api, $methodName, $config, $methodParams, $exception);

        $this->assertSame($api, $event->getProxy());
        $this->assertSame($config, $event->getConfiguration());
        $this->assertSame($methodName, $event->getMethodName());
        $this->assertSame($methodParams, $event->getMethodParams());
        $this->assertSame($exception, $event->getException());
    }
}
