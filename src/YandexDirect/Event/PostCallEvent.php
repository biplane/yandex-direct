<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;

/**
 * PostCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PostCallEvent extends BaseAfterCallEvent
{
    private $result;

    /**
     * Constructor.
     *
     * @param string     $methodName The method name of API
     * @param array      $params     The params for method of API
     * @param User       $user       The user
     * @param SoapClient $client     The client
     * @param mixed      $response   The result from API
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($methodName, array $params, User $user, SoapClient $client, $response)
    {
        parent::__construct($methodName, $params, $user, $client);

        $this->result = $response;
    }

    /**
     * Gets the result from API.
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}
