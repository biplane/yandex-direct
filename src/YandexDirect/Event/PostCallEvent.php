<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Configuration;
use Biplane\YandexDirect\Api\V4\YandexApiService;

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
     * @param YandexApiService $proxy      The yandex API service
     * @param string           $methodName An API method name
     * @param Configuration    $config     The configuration
     * @param mixed            $response   A response of API
     */
    public function __construct(YandexApiService $proxy, $methodName, Configuration $config, $response)
    {
        parent::__construct($proxy, $methodName, $config);

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
