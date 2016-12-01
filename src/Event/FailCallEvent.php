<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;

/**
 * FailCallEvent.
 *
 * @author Ural Davletshin
 */
class FailCallEvent extends BaseAfterCallEvent
{
    private $exception;

    /**
     * Constructor.
     *
     * @param string     $methodRef The fullname of API method
     * @param array      $params    The params for method of API
     * @param User       $user      The configuration
     * @param SoapClient $client    The SOAP client
     * @param \Exception $exception The thrown exception
     */
    public function __construct($methodRef, array $params, User $user, SoapClient $client, \Exception $exception)
    {
        parent::__construct($methodRef, $params, $user, $client);

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
}
