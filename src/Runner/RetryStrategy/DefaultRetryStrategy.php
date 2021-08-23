<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Runner\RetryStrategy;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Runner\RetryStrategyInterface;
use InvalidArgumentException;
use SoapFault;
use Throwable;

final class DefaultRetryStrategy implements RetryStrategyInterface
{
    public const TEMPORARY_ERROR_CODES = [
        52,   // Сервер авторизации временно недоступен (API 4, API 5)
        57,   // Превышен лимит одновременных запросов метода (API 4)
        500,  // Внутренняя ошибка сервера (API 4)
        503,  // Сервис временно недоступен (API 4)
        504,  // Плановый перерыв в работе сервера (API 4)
        506,  // Превышен лимит одновременных запросов (API 4, API 5)
        1000, // Сервер временно недоступен (API 5)
        1001, // Ошибка инициализации сервиса (API 5)
        1002, // Ошибка операции (API 5)
        1020, // Внутренняя ошибка сервера (API 5)
    ];

    /**
     * @var array<int>
     */
    private $apiErrorCodes;
    private $delay;
    private $maxDelay;
    private $multiplier;

    /**
     * @param int        $delay         Time to delay (seconds)
     * @param float      $multiplier    Multiplier to apply to the delay each time a retry occurs
     * @param int        $maxDelay      The max time (in seconds) to wait before a retry (0 means no maximum)
     * @param array<int> $apiErrorCodes An array of API error codes to allow retry
     */
    public function __construct(
        int $delay = 1,
        float $multiplier = 2.0,
        int $maxDelay = 0,
        array $apiErrorCodes = self::TEMPORARY_ERROR_CODES
    ) {
        if ($delay < 1) {
            throw new InvalidArgumentException(sprintf('Delay must be a positive number. Got: %d', $delay));
        }

        if ($maxDelay < 0) {
            throw new InvalidArgumentException(sprintf(
                'Max delay must be a positive number or zero. Got: %d',
                $maxDelay
            ));
        }

        if ($multiplier < 1) {
            throw new InvalidArgumentException(sprintf(
                'Multiplier must be greater than or equal to one. Got: %d',
                $multiplier
            ));
        }

        $this->delay = $delay;
        $this->maxDelay = $maxDelay;
        $this->multiplier = $multiplier;
        $this->apiErrorCodes = $apiErrorCodes;
    }

    public function canRetry(Throwable $exception): bool
    {
        if ($exception instanceof SoapFault) {
            return true;
        }

        if ($exception instanceof ApiException) {
            return in_array($exception->getCode(), $this->apiErrorCodes, false);
        }

        return false;
    }

    public function getDelay(int $retryCount, Throwable $exception): int
    {
        $delay = $this->delay * $this->multiplier ** $retryCount;

        if ($this->maxDelay > 0 && $delay > $this->maxDelay) {
            $delay = $this->maxDelay;
        }

        return (int)($delay * 1000000);
    }
}
