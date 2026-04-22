<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Runner\RetryStrategy;

use Biplane\YandexDirect\Exception\ApiException;
use Biplane\YandexDirect\Runner\RetryStrategyInterface;
use InvalidArgumentException;
use Override;
use SoapFault;
use Throwable;

use function in_array;
use function sprintf;

final class ExponentialRetryStrategy implements RetryStrategyInterface
{
    public const array TEMPORARY_ERROR_CODES = [
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
     * @param int        $delay         Time to delay (seconds)
     * @param float      $multiplier    Multiplier to apply to the delay each time a retry occurs
     * @param int        $maxDelay      The max time (in seconds) to wait before a retry (0 means no maximum)
     * @param array<int> $apiErrorCodes An array of API error codes to allow retry
     */
    public function __construct(
        private int $delay = 1,
        private float $multiplier = 2.0,
        private int $maxDelay = 0,
        private array $apiErrorCodes = self::TEMPORARY_ERROR_CODES,
    ) {
        if ($delay < 1) {
            throw new InvalidArgumentException(sprintf('Delay must be a positive number. Got: %d', $delay));
        }

        if ($maxDelay < 0) {
            throw new InvalidArgumentException(sprintf(
                'Max delay must be a positive number or zero. Got: %d',
                $maxDelay,
            ));
        }

        if ($multiplier < 1) {
            throw new InvalidArgumentException(sprintf(
                'Multiplier must be greater than or equal to one. Got: %d',
                $multiplier,
            ));
        }
    }

    #[Override]
    public function canRetry(Throwable $exception): bool
    {
        if ($exception instanceof SoapFault) {
            return true;
        }

        if ($exception instanceof ApiException) {
            return in_array($exception->getCode(), $this->apiErrorCodes, strict: true);
        }

        return false;
    }

    #[Override]
    public function getDelay(int $retryCount, Throwable $exception): int
    {
        /** @psalm-suppress InvalidOperand */
        $delay = $this->delay * $this->multiplier ** $retryCount;

        if ($this->maxDelay > 0 && $delay > $this->maxDelay) {
            $delay = $this->maxDelay;
        }

        /** @psalm-suppress InvalidOperand */
        return (int)($delay * 1000000);
    }
}
