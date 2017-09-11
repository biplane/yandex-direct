<?php

namespace Biplane\YandexDirect;

/**
 * ClientInterface.
 *
 * @author Denis Vasilev
 */
interface ClientInterface
{
    /**
     * Gets the request identifier.
     *
     * @return string
     */
    public function getRequestId();

    /**
     * Gets headers and content of HTTP request.
     *
     * @return string
     */
    public function getLastRequest();

    /**
     * Gets headers and content of HTTP response.
     *
     * @return string
     */
    public function getLastResponse();
}
