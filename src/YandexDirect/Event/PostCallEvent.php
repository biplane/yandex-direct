<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;

/**
 * PostCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PostCallEvent extends BaseAfterCallEvent
{
    private $response;

    /**
     * Constructor.
     *
     * @param string $methodName The method name of API
     * @param array  $params     The params for method of API
     * @param User   $user       The user
     * @param string $requestId  The request identifer
     * @param mixed  $response   A response of API
     *
     * @throws \InvalidArgumentException
     */
    public function __construct($methodName, array $params, User $user, $requestId, $response)
    {
        parent::__construct($methodName, $params, $user, $requestId);

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
