<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\SoapClient;

/**
 * BaseTestCase
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class BaseTestCase extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $user;

    protected function setUp()
    {
        $this->dispatcher = $this->getMockBuilder('Symfony\Component\EventDispatcher\EventDispatcherInterface')
            ->getMock();
        $this->user = $this->getMockBuilder('Biplane\YandexDirect\User')
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        \PHPUnit_Extension_FunctionMocker::tearDown();

        unset($this->dispatcher, $this->client, $this->user);
    }

    protected function createClient($soapClientClass, array $methods = array())
    {
        $options = array(
            'uri'      => 'localhost',
            'location' => 'localhost',
        );

        return $this->getMockBuilder($soapClientClass)
            ->setConstructorArgs(array(null, $this->dispatcher, $this->user, $options))
            ->setMethods($methods)
            ->getMockForAbstractClass();
    }

    protected function doInvoke(SoapClient $client, $method, array $params)
    {
        $reflection = new \ReflectionMethod($client, 'invoke');
        $reflection->setAccessible(true);

        return $reflection->invoke($client, $method, $params);
    }
}
