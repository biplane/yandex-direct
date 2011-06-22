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
     * @param string $method
     * @param array $params
     * @return mixed
     */
    function invoke($method, array $params);

    /**
     * @return string
     */
    function getLastRequest();

    /**
     * @return string
     */
    function getLastResponse();
}
