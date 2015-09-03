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
    private $user;

    /**
     * Constructor.
     *
     * @param string $methodName An API method name
     * @param User   $user       The user
     */
    public function __construct($methodName, User $user)
    {
        $this->methodName = $methodName;
        $this->user = $user;
    }

    /**
     * Returns the method name.
     *
     * @return string
     */
    public function getMethodName()
    {
        return $this->methodName;
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
