<?php

namespace Biplane\YandexDirectBundle\Proxy\Client;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;

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
     * @param string $method            A method name
     * @param array  $params            An array of parameters for API method
     * @param bool   $isFinancialMethod If true, when should be send the finance token
     *
     * @return mixed
     */
    public function invoke($method, array $params, $isFinancialMethod = false);

    /**
     * Gets the configuration.
     *
     * @return BaseConfiguration
     */
    public function getConfiguration();

    /**
     * Gets a content of last request.
     *
     * @return string
     */
    public function getLastRequest();

    /**
     * Gets a content of last response.
     *
     * @return string
     */
    public function getLastResponse();
}
