<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Runner;

use Throwable;

interface RetryStrategyInterface
{
    public function canRetry(Throwable $exception): bool;

    /**
     * Gets a time in delay, in microseconds.
     */
    public function getDelay(int $retryCount, Throwable $exception): int;
}
