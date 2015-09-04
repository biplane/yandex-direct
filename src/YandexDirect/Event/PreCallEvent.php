<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\Event;

/**
 * PreCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class PreCallEvent extends Event
{
    private $methodName;
    private $params;
    private $user;

    /**
     * Constructor.
     *
     * @param string $methodName The method name of API
     * @param array  $params     The params for method of API
     * @param User   $user       The user
     */
    public function __construct($methodName, array $params, User $user)
    {
        $this->methodName = $methodName;
        $this->params = $params;
        $this->user = $user;
    }

    /**
     * Gets the method name of API.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
    }

    /**
     * Gets an array of parameters for method of API.
     *
     * @return array
     */
    public function getMethodParams()
    {
        return $this->params;
    }

    /**
     * Gets the user.
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
}
