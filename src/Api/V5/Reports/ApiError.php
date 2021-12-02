<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Reports;

/**
 * @internal
 *
 * @psalm-immutable
 */
final class ApiError
{
    /** @var string */
    public $requestId;

    /** @var int */
    public $errorCode;

    /** @var string */
    public $errorMessage;

    /** @var string|null */
    public $errorDetail;

    public function __construct(string $requestId, int $errorCode, string $errorMessage, ?string $errorDetail = null)
    {
        $this->requestId = $requestId;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->errorDetail = $errorDetail;
    }
}
