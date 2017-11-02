<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\LoggerListener;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\User;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class LoggerListenerTest extends TestCase
{
    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    private $logger;

    /**
     * @var LoggerListener
     */
    private $listener;

    public function testHandleNetworkException()
    {
        $event = $this->getEventMock('FailCallEvent', 'request-id');

        $event->method('getMethodRef')
            ->willReturn('methodName');

        $event->method('getUser')
            ->willReturn($this->getUserMock('foo'));

        $event->method('getException')
            ->willReturn(new NetworkException('Could not connect to host'));

        $this->logger->expects($this->once())
            ->method('log')
            ->with(LogLevel::NOTICE, $this->stringContains('network error'), [
                'method' => 'methodName',
                'login' => 'foo',
                'request_id' => 'request-id',
                'error' => 'Could not connect to host',
            ]);

        $this->listener->onException($event);
    }

    public function testHandleApiException()
    {
        $exception = new ApiException('methodName', 'Message');
        $event = $this->getEventMock('FailCallEvent', 'request-id');

        $event->method('getMethodRef')
            ->willReturn('methodName');

        $event->method('getUser')
            ->willReturn($this->getUserMock('foo'));

        $event->method('getException')
            ->willReturn($exception);

        $this->logger->expects($this->once())
            ->method('log')
            ->with(LogLevel::CRITICAL, $this->stringContains('completed with exception'), [
                'method' => 'methodName',
                'login' => 'foo',
                'request_id' => 'request-id',
                'code' => 0,
                'exception' => $exception,
            ]);

        $this->listener->onException($event);
    }

    public function testHandleApiExceptionAsTemporary()
    {
        $exception = new ApiException('methodName', 'Message', ApiException::SERVER_TEMPORARILY_UNAVAILABLE);
        $event = $this->getEventMock('FailCallEvent', 'request-id');

        $event->method('getMethodRef')
            ->willReturn('methodName');

        $event->method('getUser')
            ->willReturn($this->getUserMock('foo'));

        $event->method('getException')
            ->willReturn($exception);

        $this->logger->expects($this->once())
            ->method('log')
            ->with(LogLevel::WARNING, $this->stringContains('completed with exception'), [
                'method' => 'methodName',
                'login' => 'foo',
                'request_id' => 'request-id',
                'code' => ApiException::SERVER_TEMPORARILY_UNAVAILABLE,
                'exception' => $exception,
            ]);

        $this->listener->onException($event);
    }

    protected function setUp()
    {
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();

        $this->listener = new LoggerListener($this->logger);
    }

    protected function tearDown()
    {
        unset($this->logger, $this->listener);
    }

    private function getUserMock($login)
    {
        $mock = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mock->method('getLogin')
            ->willReturn($login);

        return $mock;
    }
}
