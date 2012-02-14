<?php

namespace Biplane\YandexDirectBundle\Proxy\Client;

/**
 * ClientInterface
 *
 * @author Alexey Popkov <a.popkov@biplane.ru>
 */
interface ClientInterface
{
    /**
     * Invokes API method with specified name.
     *
     * @param string $method A method name
     * @param array  $params An array of parameters for API method
     *
     * @return mixed
     */
    function invoke($method, array $params);

    /**
     * Gets a content of last request.
     *
     * @return string
     */
    function getLastRequest();

    /**
     * Gets a content of last response.
     *
     * @return string
     */
    function getLastResponse();
}
