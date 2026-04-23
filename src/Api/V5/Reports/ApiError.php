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
    public function __construct(public string $requestId, public int $errorCode, public string $errorMessage, public ?string $errorDetail = null)
    {
    }
}
