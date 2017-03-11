<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;

class SoapClientTest extends BaseTestCase
{
    public function testInvokeApiMethodShouldBeCompletedSuccessfully()
    {
        $methodName = 'SomeMethod';
        $methodParams = [new \stdClass()];
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
            ->willReturnCallback(
                function ($eventName, PostCallEvent $eventArgs) use ($methodName, $methodParams, $response) {
                    $this->assertSame($this->user, $eventArgs->getUser());
                    $this->assertEquals($methodName, $eventArgs->getMethodName());
                    $this->assertSame($methodParams, $eventArgs->getMethodParams());
                    $this->assertEquals($response, $eventArgs->getResult());
                }
            );

        $client = $this->getSoapClient();

        $client->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo($methodName),
                $this->identicalTo($methodParams)
            )
            ->willReturn($response);

        $this->assertEquals($response, $this->doInvoke($client, $methodName, $methodParams));
    }

    /**
     * @expectedException \Biplane\YandexDirect\Exception\NetworkException
     * @expectedExceptionMessage Could not connect to host.
     */
    public function testInvokeApiMethodShouldThrowException()
    {
        $methodName = 'AnyMethod';
        $methodParams = [
            'foo' => 'bar',
        ];

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
                $this->assertInstanceOf('Biplane\YandexDirect\Exception\NetworkException', $eventArgs->getException());
            });

        $client = $this->getSoapClient();

        $client->expects($this->once())
            ->method('__soapCall')
            ->with(
                $this->equalTo($methodName),
                $this->identicalTo($methodParams)
            )
            ->willThrowException(new \SoapFault('HTTP', 'Could not connect to host.'));

        $this->doInvoke($client, $methodName, $methodParams);
    }

    protected function getSoapClient()
    {
        return $this->createClient('Biplane\YandexDirect\Api\SoapClient', ['__soapCall']);
    }
}
