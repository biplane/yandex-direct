<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\User;

/**
 * BaseAfterCallEvent.
 *
 * @author Denis Vasilev
 */
abstract class BaseAfterCallEvent extends PreCallEvent
{
    private $client;
    private $units;

    /**
     * Constructor.
     *
     * @param string          $methodRef The fullname of API method
     * @param array           $params    The params for method of API
     * @param User            $user      The user
     * @param ClientInterface $client    The client for API service
     * @param Units|null      $units     Information of units
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($methodRef, array $params, User $user, ClientInterface $client, Units $units = null)
    {
        parent::__construct($methodRef, $params, $user);

        if (null === $units) {
            $units = new Units(-1, -1, -1);
        }

        $this->client = $client;
        $this->units = $units;
    }

    /**
     * Gets the request identifier.
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->client->getRequestId();
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

    /**
     * Gets info about units.
     *
     * @return Units
     */
    public function getUnits()
    {
        return $this->units;
    }
}
