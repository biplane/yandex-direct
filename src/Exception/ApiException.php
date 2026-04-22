<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Exception;

use RuntimeException;
use Throwable;

final class ApiException extends RuntimeException
{
    private ?string $requestId = null;

    public function __construct(string $message, int $code, private ?string $detailMessage, ?Throwable $previous = null)
    {
        if ($detailMessage !== null) {
            $message .= ': ' . $detailMessage;
        }

        parent::__construct($message, $code, $previous);
    }

    public function getDetailMessage(): ?string
    {
        return $this->detailMessage;
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /** @internal */
    public function setRequestId(string $requestId): void
    {
        $this->requestId = $requestId;
    }
}
