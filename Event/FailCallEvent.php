<?php

namespace Biplane\YandexDirectBundle\Event;

use Biplane\YandexDirectBundle\Proxy\YandexApiService;

/**
 * FailCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class FailCallEvent extends PreCallEvent
{
    private $exception;

    /**
     * Constructor.
     *
     * @param YandexApiService $apiService  The yandex API service
     * @param string           $methodName  An API method name
     * @param string           $yandexLogin An account name
     * @param \Exception       $exception   An exception
     */
    public function __construct(YandexApiService $apiService, $methodName, $yandexLogin, \Exception $exception)
    {
        parent::__construct($apiService, $methodName, $yandexLogin);

        $this->exception = $exception;
    }

    /**
     * Returns the exception.
     *
     * @return \Exception
     */
    public function getException()
    {
        return $this->exception;
    }
}
