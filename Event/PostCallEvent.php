<?php

namespace Biplane\YandexDirectBundle\Event;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * PostCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PostCallEvent extends PreCallEvent
{
    private $response;

    /**
     * Constructor.
     *
     * @param YandexApiService  $apiService The yandex API service
     * @param string            $methodName An API method name
     * @param BaseConfiguration $config     The configuration
     * @param mixed             $response   A response of API
     */
    public function __construct(YandexApiService $apiService, $methodName, BaseConfiguration $config, $response)
    {
        parent::__construct($apiService, $methodName, $config);

        $this->response = $response;
    }

    /**
     * Returns the last response of API.
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
}
