<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\V4\YandexApiService;
use Biplane\YandexDirect\Configuration;

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
     * @param YandexApiService $proxy        The yandex API service
     * @param string           $methodName   An API method name
     * @param Configuration    $config       The configuration
     * @param array            $methodParams An array of parameters for API method
     * @param \Exception       $exception    The thrown exception
     */
    public function __construct(
        YandexApiService $proxy,
        $methodName,
        Configuration $config,
        array $methodParams,
        \Exception $exception
    ) {
        parent::__construct($proxy, $methodName, $config);

        $this->methodParams = $methodParams;
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
