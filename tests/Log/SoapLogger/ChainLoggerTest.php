<?php

declare(strict_types=1);

namespace Biplane\Tests\Log\SoapLogger;

use Biplane\YandexDirect\Log\SoapLogger;
use Biplane\YandexDirect\Log\SoapLogger\ChainLogger;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use RuntimeException;

final class ChainLoggerTest extends TestCase
{
    public function testHandleException(): void
    {
        $logger1 = $this->createMock(SoapLogger::class);
        $logger2 = $this->createMock(SoapLogger::class);
        $errorLogger = $this->createMock(LoggerInterface::class);

        $chain = new ChainLogger([$logger1, $logger2], $errorLogger);

        $exception = new RuntimeException();
        $logger1->expects(self::once())
            ->method('log')
            ->willThrowException($exception);

        $logger2->expects(self::once())->method('log');

        $errorLogger->expects(self::once())
            ->method('error')
            ->with(
                self::stringContains('Failed to write to log'),
                self::equalTo([
                    'logger' => $logger1::class,
                    'exception' => $exception,
                ]),
            );

        $chain->log([
            'service' => 'test',
            'method' => 'ping',
            'request_id' => '123',
            'request_headers' => '',
            'request' => '',
            'response_headers' => '',
            'response' => '',
            'failed' => false,
            'fault' => null,
        ]);
    }
}
