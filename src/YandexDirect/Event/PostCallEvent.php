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
     * @param string     $methodRef The fullname of API method
     * @param array      $params    The params for method of API
     * @param User       $user      The user
     * @param SoapClient $client    The client
     * @param mixed      $response  The result from API
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($methodRef, array $params, User $user, SoapClient $client, $response)
    {
        parent::__construct($methodRef, $params, $user, $client);

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
