<?php

namespace Biplane\Tests\YandexDirect\Api\V4;

use Biplane\YandexDirect\Api\V4\YandexApiService;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;

/**
 * @author Denis Vasilev <yethee@auto-pilot.pro>
 */
class YandexApiServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var YandexApiService|\PHPUnit_Framework_MockObject_MockObject
     */
    private $proxy;

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
        $php = \PHPUnit_Extension_FunctionMocker::start($this, 'Biplane\YandexDirect\Api\V4')
            ->mockFunction('time')
            ->getMock();

        $php->expects($this->any())
            ->method('time')
            ->willReturn(9999999);

        $this->user->expects($this->once())
            ->method('getHashCode')
            ->willReturn('foo');

        $response = 'response';
        $params = array(
            $this->getMock('Biplane\YandexDirect\Api\V4\Contract\KeywordRequest')
        );

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::BEFORE_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\PreCallEvent')
            )
            ->willReturnCallback(function ($eventName, PreCallEvent $eventArgs) use ($params) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals('Keyword', $eventArgs->getMethodName());
                $this->assertSame($params, $eventArgs->getMethodParams());
            });

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::AFTER_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\PostCallEvent')
            )
            ->willReturnCallback(function ($eventName, PostCallEvent $eventArgs) use ($params, $response) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals('Keyword', $eventArgs->getMethodName());
                $this->assertSame($params, $eventArgs->getMethodParams());
                $this->assertEquals($response, $eventArgs->getResponse());
                $this->assertEquals('0b31f8e10bb3f7a2c51be252ce5d1fda', $eventArgs->getRequestId());
            });

        $this->proxy->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('Keyword'),
                $this->identicalTo($params),
                $this->anything(),
                $this->identicalTo(array())
            )
            ->willReturn($response);

        $this->assertEquals($response, $this->proxy->keyword($params[0]));
    }

    /**
     * @expectedException \Biplane\YandexDirect\Api\V4\Exception\ApiException
     */
    public function testInvokeApiMethodShouldThrowException()
    {
        $this->user->expects($this->once())
            ->method('getHashCode')
            ->willReturn('foo');

        $params = array(
            $this->getMock('Biplane\YandexDirect\Api\V4\Contract\GetChangesRequest')
        );

        $this->dispatcher->expects($this->at(0))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::BEFORE_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\PreCallEvent')
            )
            ->willReturnCallback(function ($eventName, PreCallEvent $eventArgs) use ($params) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals('GetChanges', $eventArgs->getMethodName());
                $this->assertSame($params, $eventArgs->getMethodParams());
            });

        $this->dispatcher->expects($this->at(1))
            ->method('dispatch')
            ->with(
                $this->equalTo(Events::FAIL_REQUEST),
                $this->isInstanceOf('Biplane\YandexDirect\Event\FailCallEvent')
            )
            ->willReturnCallback(function ($eventName, FailCallEvent $eventArgs) use ($params) {
                $this->assertSame($this->user, $eventArgs->getUser());
                $this->assertEquals('GetChanges', $eventArgs->getMethodName());
                $this->assertSame($params, $eventArgs->getMethodParams());
                $this->assertInstanceOf('Biplane\YandexDirect\Api\V4\Exception\ApiException', $eventArgs->getException());
            });

        $this->proxy->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('GetChanges'),
                $this->identicalTo($params),
                $this->anything(),
                $this->identicalTo(array())
            )
            ->willThrowException(new \SoapFault('SOAP:54', 'Some error.'));

        $this->proxy->getChanges($params[0]);
    }

    public function testAdditionalHeadersShouldBeAssignWhenInvokeFinancialMethod()
    {
        $php = \PHPUnit_Extension_FunctionMocker::start($this, 'Biplane\YandexDirect\Api\V4')
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
            ->with($this->equalTo('GetCreditLimits'), $this->equalTo(10009))
            ->willReturn('finance-token');

        $this->proxy->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo('GetCreditLimits'),
                $this->identicalTo(array()),
                $this->anything(),
                $this->equalTo(array(
                    new \SoapHeader('API', 'finance_token', 'finance-token'),
                    new \SoapHeader('API', 'operation_num', 10009)
                ))
            );

        $this->proxy->getCreditLimits();
    }

    protected function setUp()
    {
        $this->dispatcher = $this->getMock('Symfony\Component\EventDispatcher\EventDispatcherInterface');
        $this->user = $this->getMockBuilder('Biplane\YandexDirect\User')
            ->disableOriginalConstructor()
            ->getMock();

        $this->proxy = $this->getMock(
            'Biplane\YandexDirect\Api\V4\YandexApiService',
            array('__soapCall'),
            array($this->dispatcher, $this->user)
        );
    }

    protected function tearDown()
    {
        \PHPUnit_Extension_FunctionMocker::tearDown();

        unset($this->dispatcher, $this->proxy, $this->user);
    }
}
