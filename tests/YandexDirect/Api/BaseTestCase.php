<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\SoapClient;

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

        $this->configureUser($this->user);
    }

    protected function tearDown()
    {
        \PHPUnit_Extension_FunctionMocker::tearDown();

        unset($this->dispatcher, $this->client, $this->user);
    }

    protected function configureUser(\PHPUnit_Framework_MockObject_MockObject $user)
    {
        $user->method('getSoapOptions')
            ->willReturn([]);
        $user->method('getInvoker')
            ->willReturn(function (callable $callback) {
                return $callback();
            });
    }

    protected function createClient($soapClientClass, array $methods = [])
    {
        $options = [
            'uri' => 'localhost',
            'location' => 'localhost',
        ];

        return $this->getMockBuilder($soapClientClass)
            ->setConstructorArgs([null, $this->dispatcher, $this->user, $options])
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
