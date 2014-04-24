<?php

namespace Biplane\YandexDirectBundle\Event;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;
use Symfony\Component\EventDispatcher\Event;

/**
 * PreCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PreCallEvent extends Event
{
    private $methodName;
    private $apiService;
    private $config;

    /**
     * Constructor.
     *
     * @param YandexApiService  $apiService The yandex API service
     * @param string            $methodName An API method name
     * @param BaseConfiguration $config     The configuration
     */
    public function __construct(YandexApiService $apiService, $methodName, BaseConfiguration $config)
    {
        $this->apiService = $apiService;
        $this->methodName = $methodName;
        $this->config     = $config;
    }

    /**
     * Returns the yandex API service.
     *
     * @return YandexApiService
     */
    public function getApiService()
    {
        return $this->apiService;
    }

    /**
     * Returns the method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Gets the configuration.
     *
     * @return BaseConfiguration
     */
    public function getConfiguration()
    {
        return $this->config;
    }
}
