<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Runner\RetryStrategy;

use BadMethodCallException;
use Biplane\YandexDirect\Runner\RetryStrategyInterface;
use Override;
use Throwable;

final class NoRetryStrategy implements RetryStrategyInterface
{
    #[Override]
    public function canRetry(Throwable $exception): bool
    {
        return false;
    }

    #[Override]
    public function getDelay(int $retryCount, Throwable $exception): int
    {
        throw new BadMethodCallException('Not implemented');
    }
}
