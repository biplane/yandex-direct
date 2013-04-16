<?php

namespace Biplane\YandexDirectBundle\Event;

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
     * @param YandexApiService $apiService  The yandex API service
     * @param string           $methodName  An API method name
     * @param string           $yandexLogin An account name
     * @param mixed            $response    A response of API
     */
    public function __construct(YandexApiService $apiService, $methodName, $yandexLogin, $response)
    {
        parent::__construct($apiService, $methodName, $yandexLogin);

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
