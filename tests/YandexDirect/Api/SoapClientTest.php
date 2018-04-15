<?php

namespace Biplane\Tests\YandexDirect\Api;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\Event\FailCallEvent;
use Biplane\YandexDirect\Event\PostCallEvent;
use Biplane\YandexDirect\Event\PreCallEvent;
use Biplane\YandexDirect\Events;
use Biplane\YandexDirect\Exception\NetworkException;

class SoapClientTest extends BaseTestCase
{
    public function testInvokeApiMethodShouldBeCompletedSuccessfully()
    {
        $methodName = 'SomeMethod';
        $methodParams = [new \stdClass()];
        $response = 'response';

        $this->dispatcher->expects(self::at(0))
            ->method('dispatch')
            ->with(
                self::equalTo(Events::BEFORE_REQUEST),
                self::isInstanceOf(PreCallEvent::class)
            )
            ->willReturnCallback(function ($eventName, PreCallEvent $eventArgs) use ($methodName, $methodParams) {
                self::assertSame($this->user, $eventArgs->getUser());
                self::assertEquals($methodName, $eventArgs->getMethodName());
                self::assertSame($methodParams, $eventArgs->getMethodParams());
            });

        $this->dispatcher->expects(self::at(1))
            ->method('dispatch')
            ->with(
                self::equalTo(Events::AFTER_REQUEST),
                self::isInstanceOf(PostCallEvent::class)
            )
            ->willReturnCallback(
                function ($eventName, PostCallEvent $eventArgs) use ($methodName, $methodParams, $response) {
                    self::assertSame($this->user, $eventArgs->getUser());
                    self::assertEquals($methodName, $eventArgs->getMethodName());
                    self::assertSame($methodParams, $eventArgs->getMethodParams());
                    self::assertEquals($response, $eventArgs->getResult());
                }
            );

        $client = $this->getSoapClient();

        $client->expects(self::once())
            ->method('__soapCall')
            ->with(self::equalTo($methodName), self::identicalTo($methodParams))
            ->willReturn($response);

        self::assertEquals($response, $this->doInvoke($client, $methodName, $methodParams));
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

        $this->dispatcher->expects(self::at(0))
            ->method('dispatch')
            ->with(self::equalTo(Events::BEFORE_REQUEST), self::isInstanceOf(PreCallEvent::class))
            ->willReturnCallback(function ($eventName, PreCallEvent $eventArgs) use ($methodName, $methodParams) {
                self::assertSame($this->user, $eventArgs->getUser());
                self::assertEquals($methodName, $eventArgs->getMethodName());
                self::assertSame($methodParams, $eventArgs->getMethodParams());
            });

        $this->dispatcher->expects(self::at(1))
            ->method('dispatch')
            ->with(self::equalTo(Events::FAIL_REQUEST), self::isInstanceOf(FailCallEvent::class))
            ->willReturnCallback(function ($eventName, FailCallEvent $eventArgs) use ($methodName, $methodParams) {
                self::assertSame($this->user, $eventArgs->getUser());
                self::assertEquals($methodName, $eventArgs->getMethodName());
                self::assertSame($methodParams, $eventArgs->getMethodParams());
                self::assertInstanceOf(NetworkException::class, $eventArgs->getException());
            });

        $client = $this->getSoapClient();

        $client->expects(self::once())
            ->method('__soapCall')
            ->with(self::equalTo($methodName), self::identicalTo($methodParams))
            ->willThrowException(new \SoapFault('HTTP', 'Could not connect to host.'));

        $this->doInvoke($client, $methodName, $methodParams);
    }

    protected function getSoapClient()
    {
        return $this->createClient(SoapClient::class, ['__soapCall']);
    }
}
