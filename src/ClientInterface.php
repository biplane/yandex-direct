<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

interface ClientInterface
{
    /**
     * Gets the request identifier.
     */
    public function getRequestId(): string;

    /**
     * Gets headers and content of HTTP request.
     */
    public function getLastRequest(): string;

    /**
     * Gets headers and content of HTTP response.
     */
    public function getLastResponse(): string;
}
