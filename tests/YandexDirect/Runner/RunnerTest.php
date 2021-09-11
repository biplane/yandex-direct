<?php

namespace Biplane\Tests\YandexDirect\Runner;

use Biplane\YandexDirect\Runner\RetryStrategyInterface;
use Biplane\YandexDirect\Runner\Runner;
use PHPUnit\Framework\TestCase;
use RuntimeException;

class RunnerTest extends TestCase
{
    public function testRunWhenRetryLimitReached(): void
    {
        $retryStrategy = $this->createMock(RetryStrategyInterface::class);
        $runner = new Runner($retryStrategy, 3);

        $retryStrategy->expects(self::exactly(3))
            ->method('canRetry')
            ->willReturn(true);

        $callback = function () {
            throw new RuntimeException('Error');
        };

        $this->expectException(RuntimeException::class);

        $runner->run($callback);
    }

    public function testRetryRun(): void
    {
        $retryStrategy = $this->createMock(RetryStrategyInterface::class);
        $runner = new Runner($retryStrategy, 3);

        $retryStrategy->method('canRetry')->willReturn(true);

        $callCount = 0;
        $callback = function () use (&$callCount) {
            $callCount++;

            if ($callCount <= 2) {
                throw new RuntimeException('Error');
            }

            return 'result';
        };

        self::assertEquals('result', $runner->run($callback));
    }
}
