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
    private $methodParams;

    /**
     * Constructor.
     *
     * @param YandexApiService  $apiService   The yandex API service
     * @param string            $methodName   An API method name
     * @param BaseConfiguration $config       The configuration
     * @param array             $methodParams An array of parameters for API method
     * @param \Exception        $exception    The thrown exception
     */
    public function __construct(
        YandexApiService $apiService,
        $methodName,
        BaseConfiguration $config,
        array $methodParams,
        \Exception $exception
    ) {
        parent::__construct($apiService, $methodName, $config);

        $this->methodParams = array();
        $this->exception = $exception;
    }

    /**
     * Gets the thrown exception.
     *
     * @return \Exception
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * Gets an array of parameters for API method.
     *
     * @return array
     */
    public function getMethodParams()
    {
        return $this->methodParams;
    }
}
