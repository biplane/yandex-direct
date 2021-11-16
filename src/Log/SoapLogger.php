<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Log;

/**
 * @psalm-type Context array{
 *     service: string,
 *     method: string,
 *     request_id: string|null,
 *     request_headers: string,
 *     request: string,
 *     response_headers: string,
 *     response: string,
 *     fault: string|null,
 *     failed: bool
 * }
 */
interface SoapLogger
{
    /**
     * @param array<string, mixed> $context
     * @psalm-param Context $context
     */
    public function log(array $context): void;
}
