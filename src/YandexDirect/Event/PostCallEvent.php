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
     * @param string $methodName The method name of API
     * @param array  $params     The params for method of API
     * @param User   $user       The user
     * @param mixed  $response   A response of API
     */
    public function __construct($methodName, array $params, User $user, $response)
    {
        parent::__construct($methodName, $params, $user);

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
