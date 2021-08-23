<?php

namespace Biplane\YandexDirect\Runner\RetryStrategy;

use BadMethodCallException;
use Biplane\YandexDirect\Runner\RetryStrategyInterface;
use Throwable;

final class NullRetryStrategy implements RetryStrategyInterface
{
    public function canRetry(Throwable $exception): bool
    {
        return false;
    }

    public function getDelay(int $retryCount, Throwable $exception): int
    {
        throw new BadMethodCallException('Not implemented');
    }
}
