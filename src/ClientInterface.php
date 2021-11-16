<?php

declare(strict_types=1);

namespace Biplane\YandexDirect;

/**
 * @deprecated Use SoapLogger to get request/response instead.
 */
interface ClientInterface
{
    /**
     * Gets the request identifier.
     */
    public function getRequestId(): string;

    /**
     * Gets headers and content of HTTP request.
     *
     * @deprecated
     */
    public function getLastRequest(): string;

    /**
     * Gets headers and content of HTTP response.
     *
     * @deprecated
     */
    public function getLastResponse(): string;
}
