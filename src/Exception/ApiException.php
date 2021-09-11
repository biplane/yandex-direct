<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Exception;

use RuntimeException;
use Throwable;

class ApiException extends RuntimeException
{
    /** @var string|null */
    private $detailMessage;

    /** @var string|null */
    private $requestId;

    public function __construct(string $message, int $code, ?string $detailMessage, ?Throwable $previous = null)
    {
        if ($detailMessage !== null) {
            $message .= ': ' . $detailMessage;
        }

        parent::__construct($message, $code, $previous);

        $this->detailMessage = $detailMessage;
    }

    public function getDetailMessage(): ?string
    {
        return $this->detailMessage;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }
}
