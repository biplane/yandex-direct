<?php

namespace Biplane\YandexDirect\Helper;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Exception\NetworkException;
use Biplane\YandexDirect\Exception\RequestException;

/**
 * Invoker.
 *
 * @author Denis Vasilev
 */
class Invoker
{
    private $factor;
    private $maxAttempts;
    private $maxDelay;

    /**
     * Constructor.
     *
     * @param int       $maxAttempts The number of max attempts to invoke the callback
     * @param int       $factor      The base number for the exponential back off
     * @param int|float $maxDelay    The max time (in seconds) to wait before a retry
     */
    public function __construct($maxAttempts = 1, $factor = 1, $maxDelay = 60)
    {
        if ($maxAttempts < 1) {
            throw new \InvalidArgumentException(sprintf(
                'The value of max attempts must be a positive integer, given %d.',
                $maxAttempts
            ));
        }

        if ($factor < 1) {
            throw new \InvalidArgumentException(sprintf(
                'The value of factor must be a positive integer, given %d.',
                $factor
            ));
        }

        if ($maxDelay <= 0) {
            throw new \InvalidArgumentException(sprintf(
                'The value of max delay must be greater than zero, given %f.',
                $maxDelay
            ));
        }

        $this->maxAttempts = (int)$maxAttempts;
        $this->factor = (int)$factor;
        $this->maxDelay = (float)$maxDelay;
    }

    final public function __invoke(callable $callback)
    {
        $attempts = 0;

        while (true) {
            ++$attempts;

            try {
                return $callback($attempts);
            } catch (RequestException $ex) {
                if ($attempts < $this->maxAttempts && $this->canRetry($ex)) {
                    usleep($this->getDelay($attempts) * 1000000);
                } else {
                    throw $ex;
                }
            }
        }
    }

    /**
     * Checks that a request can be retried.
     *
     * @param RequestException $exception The thrown exception
     *
     * @return bool
     */
    protected function canRetry(RequestException $exception)
    {
        if ($exception instanceof NetworkException) {
            if ($exception->getCode() === 0 || $exception->getCode() >= 500) {
                return true;
            }
        } elseif ($exception instanceof ApiException) {
            return in_array($exception->getCode(), [
                ApiException::AUTHENTICATION_TEMPORARILY_UNAVAILABLE,
                ApiException::SERVER_TEMPORARILY_UNAVAILABLE,
                ApiException::INITIALIZATION_ERROR,
                ApiException::OPERATION_ERROR,
                ApiException::EXCEEDED_LIMIT_CONCURRENT_REQUESTS,
                ApiException::TEMPORARILY_UNAVAILABLE,
            ]);
        }

        return false;
    }

    private function getDelay($numAttempt)
    {
        $jitter = mt_rand() / mt_getrandmax() - 0.5;
        $delay = $this->factor << $numAttempt;

        return min($this->maxDelay, $delay + $jitter);
    }
}
