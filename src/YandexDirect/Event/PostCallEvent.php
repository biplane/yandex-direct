<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;

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
     * @param string $methodName An API method name
     * @param User   $user       The user
     * @param mixed  $response   A response of API
     */
    public function __construct($methodName, User $user, $response)
    {
        parent::__construct($methodName, $user);

        $this->response = $response;
    }

    /**
     * Gets the last response of API.
     *
     * @return mixed
     */
    public function getResponse()
    {
        return $this->response;
    }
}
