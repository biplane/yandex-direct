<?php

namespace Biplane\Tests\YandexDirect\EventListener;

use Biplane\YandexDirect\EventListener\LoggerListener;
use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\User;
use PHPUnit\Framework\MockObject\MockObject;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class LoggerListenerTest extends TestCase
{
    /**
     * @var MockObject|LoggerInterface
     */
    private $logger;

    /**
     * @var LoggerListener
     */
    private $listener;

    protected function setUp(): void
    {
        $this->logger = $this->createMock(LoggerInterface::class);
        $this->listener = new LoggerListener($this->logger);
    }

    protected function tearDown(): void
    {
        unset($this->logger, $this->listener);
    }

    public function testHandleNetworkException()
    {
        $event = $this->getEventMock('FailCallEvent', 'request-id');

        $event->method('getMethodRef')->willReturn('methodName');
        $event->method('getUser')->willReturn($this->getUserMock('foo'));
        $event->method('getException')->willReturn(
            new NetworkException('Could not connect to host')
        );

        $this->logger->expects(self::once())
            ->method('log')
            ->with(LogLevel::NOTICE, self::stringContains('network error'), [
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

        $event->method('getMethodRef')->willReturn('methodName');
        $event->method('getUser')->willReturn($this->getUserMock('foo'));
        $event->method('getException')->willReturn($exception);

        $this->logger->expects(self::once())
            ->method('log')
            ->with(LogLevel::CRITICAL, self::stringContains('completed with exception'), [
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

        $event->method('getMethodRef')->willReturn('methodName');
        $event->method('getUser')->willReturn($this->getUserMock('foo'));
        $event->method('getException')->willReturn($exception);

        $this->logger->expects(self::once())
            ->method('log')
            ->with(LogLevel::WARNING, self::stringContains('completed with exception'), [
                'method' => 'methodName',
                'login' => 'foo',
                'request_id' => 'request-id',
                'code' => ApiException::SERVER_TEMPORARILY_UNAVAILABLE,
                'exception' => $exception,
            ]);

        $this->listener->onException($event);
    }

    private function getUserMock($login)
    {
        $mock = $this->createMock(User::class);
        $mock->method('getLogin')->willReturn($login);

        return $mock;
    }
}
