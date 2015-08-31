<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\V4\YandexApiService;
use Biplane\YandexDirect\Configuration;
use Symfony\Component\EventDispatcher\Event;

/**
 * PreCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PreCallEvent extends Event
{
    private $methodName;
    private $proxy;
    private $config;

    /**
     * Constructor.
     *
     * @param YandexApiService $proxy      The yandex API service
     * @param string           $methodName An API method name
     * @param Configuration    $config     The configuration
     */
    public function __construct(YandexApiService $proxy, $methodName, Configuration $config)
    {
        $this->proxy = $proxy;
        $this->methodName = $methodName;
        $this->config = $config;
    }

    /**
     * Returns the yandex API service.
     *
     * @return YandexApiService
     */
    public function getProxy()
    {
        return $this->proxy;
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
     * @return Configuration
     */
    public function getConfiguration()
    {
        return $this->config;
    }
}
