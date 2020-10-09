<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;

/**
 * PreCallEvent.
 *
 * @author Ural Davletshin
 */
class PreCallEvent extends BaseEvent
{
    private $methodRef;
    private $params;
    private $user;

    /**
     * Constructor.
     *
     * @param string $methodRef The fullname of API method
     * @param array  $params    The params for method of API
     * @param User   $user      The user
     */
    public function __construct($methodRef, array $params, User $user)
    {
        $this->methodRef = $methodRef;
        $this->params = $params;
        $this->user = $user;
    }

    /**
     * Gets the method name of API.
     *
     * @return string|null
     */
    public function getMethodName()
    {
        if (!empty($this->methodRef)) {
            return substr($this->methodRef, strpos($this->methodRef, ':') + 1);
        }

        return null;
    }

    /**
     * Gets the fullname of API method.
     *
     * Returns string in format {ServiceName}:{MethodName}
     * Where, {ServiceName} - local class name of proxy
     *  {MethodName} - the name of API method
     *
     * @return string
     */
    public function getMethodRef()
    {
        return $this->methodRef;
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
