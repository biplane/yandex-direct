<?php

namespace Biplane\YandexDirectBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * PreCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PreCallEvent extends Event
{
    private $methodName;
    private $apiService;
    private $yandexLogin;

    /**
     * Constructor.
     *
     * @param YandexApiService $apiService  The yandex API service
     * @param string           $methodName  An API method name
     * @param string           $yandexLogin An account name
     */
    public function __construct(YandexApiService $apiService, $methodName, $yandexLogin)
    {
        $this->apiService = $apiService;
        $this->methodName = $methodName;
        $this->yandexLogin = $yandexLogin;
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
     * @return string
     */
    public function getYandexLogin()
    {
        return $this->yandexLogin;
    }
}
