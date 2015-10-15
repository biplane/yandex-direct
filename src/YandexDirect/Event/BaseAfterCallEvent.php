<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;

/**
 * BaseAfterCallEvent
 *
 * @author Denis Vasilev <yethee@biplane.ru>
 */
abstract class BaseAfterCallEvent extends PreCallEvent
{
    private $requestId;
    private $client;

    /**
     * Constructor.
     *
     * @param string     $methodName The method name of API
     * @param array      $params     The params for method of API
     * @param User       $user       The user
     * @param string     $requestId  The request identifer
     * @param SoapClient $client     The SOAP client
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($methodName, array $params, User $user, $requestId, SoapClient $client)
    {
        parent::__construct($methodName, $params, $user);

        $this->requestId = $requestId;
        $this->client = $client;
    }

    /**
     * Gets the request identifier.
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Gets headers and content of HTTP request.
     *
     * @return string
     */
    public function getRequest()
    {
        return $this->client->getLastRequest();
    }

    /**
     * Gets headers and content of HTTP response.
     *
     * @return string
     */
    public function getResponse()
    {
        return $this->client->getLastResponse();
    }
}
