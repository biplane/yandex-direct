<?php

namespace Biplane\Tests\YandexDirect\Api\V4;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;

/**
 * @author Denis Vasilev <yethee@biplane.ru>
 */
class SoapClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SoapClient|\PHPUnit_Framework_MockObject_MockObject
     */
    private $client;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $dispatcher;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $user;

    public function testInvokeApiMethodShouldBeCompletedSuccessfully()
    {
        $php = \PHPUnit_Extension_FunctionMocker::start($this, 'Biplane\YandexDirect\Api')
            ->mockFunction('time')
            ->getMock();

        $php->expects($this->any())
            ->method('time')
            ->willReturn(9999999);

        $this->user->expects($this->once())
            ->method('getHashCode')
            ->willReturn('foo');

        $methodName = 'SomeMethod';
        $methodParams = array(new \stdClass());
        $response = 'response';

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::BEFORE_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\PreCallEvent')
            )
            ->willReturnCallback(function ($eventName, PreCallEvent $eventArgs) use ($methodName, $methodParams) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals($methodName, $eventArgs->getMethodName());
                $this->assertSame($methodParams, $eventArgs->getMethodParams());
            });

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::AFTER_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\PostCallEvent')
            )
            ->willReturnCallback(function ($eventName, PostCallEvent $eventArgs) use ($methodName, $methodParams, $response) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals($methodName, $eventArgs->getMethodName());
                $this->assertSame($methodParams, $eventArgs->getMethodParams());
                $this->assertEquals($response, $eventArgs->getResponse());
                $this->assertEquals('0b31f8e10bb3f7a2c51be252ce5d1fda', $eventArgs->getRequestId());
            });

        $this->client->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo($methodName),
                $this->identicalTo($methodParams),
                $this->anything(),
                $this->identicalTo(array())
            )
            ->willReturn($response);

        $this->assertEquals($response, $this->doInvoke($methodName, $methodParams));
    }

    /**
     * @expectedException \Biplane\YandexDirect\Exception\ApiException
     */
    public function testInvokeApiMethodShouldThrowException()
    {
        $this->user->expects($this->once())
            ->method('getHashCode')
            ->willReturn('foo');

        $methodName = 'AnyMethod';
        $methodParams = array(
            'foo' => 'bar'
        );

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::BEFORE_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\PreCallEvent')
            )
            ->willReturnCallback(function ($eventName, PreCallEvent $eventArgs) use ($methodName, $methodParams) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals($methodName, $eventArgs->getMethodName());
                $this->assertSame($methodParams, $eventArgs->getMethodParams());
            });

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::FAIL_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\FailCallEvent')
            )
            ->willReturnCallback(function ($eventName, FailCallEvent $eventArgs) use ($methodName, $methodParams) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals($methodName, $eventArgs->getMethodName());
                $this->assertSame($methodParams, $eventArgs->getMethodParams());
                $this->assertInstanceOf('Biplane\YandexDirect\Exception\ApiException', $eventArgs->getException());
            });

        $this->client->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo($methodName),
                $this->identicalTo($methodParams),
                $this->anything(),
                $this->identicalTo(array())
            )
            ->willThrowException(new \SoapFault('SOAP:54', 'Some error.'));

        $this->doInvoke($methodName, $methodParams);
    }

    /**
     * @dataProvider provideFinancialMethods
     */
    public function testAdditionalHeadersShouldBeAssignWhenInvokeFinancialMethod($methodName)
    {
        $php = \PHPUnit_Extension_FunctionMocker::start($this, 'Biplane\YandexDirect\Api')
            ->mockFunction('time')
            ->getMock();

        $php->expects($this->any())
            ->method('time')
            ->willReturn(10009);

        $this->user->expects($this->once())
            ->method('getHashCode')
            ->willReturn('foo');

        $this->user->expects($this->once())
            ->method('createFinanceToken')
            ->with($this->equalTo($methodName), $this->equalTo(10009))
            ->willReturn('finance-token');

        $this->client->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo($methodName),
                $this->identicalTo(array()),
                $this->anything(),
                $this->equalTo(array(
                    new \SoapHeader('API', 'finance_token', 'finance-token'),
                    new \SoapHeader('API', 'operation_num', 10009)
                ))
            );

        $this->doInvoke($methodName, array());
    }

    public function provideFinancialMethods()
    {
        return array(
            array('TransferMoney'),
            array('GetCreditLimits'),
            array('CreateInvoice'),
            array('PayCampaigns')
        );
    }

    protected function setUp()
    {
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
        $this->user = $this->getMockBuilder('Biplane\YandexDirect\User')
            ->disableOriginalConstructor()
            ->getMock();

        $options = array(
            'uri'      => 'localhost',
            'location' => 'localhost',
        );

        $this->client = $this->getMockBuilder('Biplane\YandexDirect\Api\SoapClient')
            ->setConstructorArgs(array(null, $this->dispatcher, $this->user, $options))
            ->setMethods(array('__soapCall'))
            ->getMock();
    }

    protected function tearDown()
    {
        \PHPUnit_Extension_FunctionMocker::tearDown();

        unset($this->dispatcher, $this->client, $this->user);
    }

    private function doInvoke($method, array $params, $isFinancialMethod = false)
    {
        $reflection = new \ReflectionMethod($this->client, 'invoke');
        $reflection->setAccessible(true);

        return $reflection->invoke($this->client, $method, $params, $isFinancialMethod);
    }
}
