<?php

namespace Biplane\YandexDirect\Runner;

use Biplane\YandexDirect\Runner\RetryStrategy\NoRetryStrategy;
use InvalidArgumentException;
use LogicException;
use Psr\Log\LoggerInterface;
use Throwable;

final class Runner
{
    private static $default;

    private $retryStrategy;
    private $maxRetries;
    private $logger;

    public function __construct(RetryStrategyInterface $strategy, int $maxRetries, ?LoggerInterface $logger = null)
    {
        if ($maxRetries < 0) {
            throw new InvalidArgumentException(sprintf(
                'Max retries must be greater than or equal to zero. Got: %d',
                $maxRetries
            ));
        }

        $this->retryStrategy = $strategy;
        $this->maxRetries = $maxRetries;
        $this->logger = $logger;
    }

    public static function default(): self
    {
        if (self::$default === null) {
            self::$default = new self(new NoRetryStrategy(), 0);
        }

        return self::$default;
    }

    /**
     * @param callable(): mixed $callback
     *
     * @return mixed
     * @throws Throwable
     */
    public function run(callable $callback)
    {
        if ($this->maxRetries < 1) {
            return $callback();
        }

        $retryCount = 0;

        while ($retryCount <= $this->maxRetries) {
            try {
                return $callback();
            } catch (Throwable $e) {
                $retryCount++;

                if ($retryCount > $this->maxRetries || !$this->retryStrategy->canRetry($e)) {
                    throw $e;
                }

                $delay = $this->retryStrategy->getDelay($retryCount, $e);

                if ($this->logger !== null) {
                    $this->logger->info(
                        sprintf(
                            'Try #{count} after {delay}ms, %s [%s]: %s',
                            get_class($e),
                            $e->getCode(),
                            $e->getMessage()
                        ),
                        [
                            'count' => $retryCount,
                            'delay' => (int)($delay / 1000),
                        ]
                    );
                }

                usleep($delay);

                continue;
            }
        }

        throw new LogicException(sprintf('Unexpected exit from method %s', __METHOD__));
    }
}
