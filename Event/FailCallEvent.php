<?php

namespace Biplane\YandexDirectBundle\Event;

use Biplane\YandexDirectBundle\Configuration\BaseConfiguration;
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
     * @param YandexApiService  $apiService The yandex API service
     * @param string            $methodName An API method name
     * @param BaseConfiguration $config     The configuration
     * @param \Exception        $exception  The thrown exception
     */
    public function __construct(
        YandexApiService $apiService,
        $methodName,
        BaseConfiguration $config,
        \Exception $exception
    ) {
        parent::__construct($apiService, $methodName, $config);

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
