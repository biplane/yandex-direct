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

        $this->configureDispatcher([
            [
                Events::BEFORE_REQUEST,
                self::callback(function (PreCallEvent $event) use ($methodName, $methodParams) {
                    self::assertSame($this->user, $event->getUser());
                    self::assertEquals($methodName, $event->getMethodName());
                    self::assertSame($methodParams, $event->getMethodParams());

                    return true;
                }),
            ],
            [
                Events::AFTER_REQUEST,
                self::callback(function (PostCallEvent $event) use ($methodName, $methodParams, $response) {
                    self::assertSame($this->user, $event->getUser());
                    self::assertEquals($methodName, $event->getMethodName());
                    self::assertSame($methodParams, $event->getMethodParams());
                    self::assertEquals($response, $event->getResult());

                    return true;
                }),
            ],
        ]);

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

        $this->configureDispatcher([
            [
                Events::BEFORE_REQUEST,
                self::isInstanceOf(PreCallEvent::class),
            ],
            [
                Events::FAIL_REQUEST,
                self::callback(function (FailCallEvent $event) use ($methodName, $methodParams) {
                    self::assertSame($this->user, $event->getUser());
                    self::assertEquals($methodName, $event->getMethodName());
                    self::assertSame($methodParams, $event->getMethodParams());
                    self::assertInstanceOf(NetworkException::class, $event->getException());

                    return true;
                }),
            ],
        ]);

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
