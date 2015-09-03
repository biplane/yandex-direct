<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\User;

/**
 * FailCallEvent.
 *
 * @author Ural Davletshin <u.davletshin@biplane.ru>
 */
class FailCallEvent extends PreCallEvent
{
    private $exception;
    private $methodParams;

    /**
     * Constructor.
     *
     * @param string     $methodName   An API method name
     * @param User       $user         The configuration
     * @param array      $methodParams An array of parameters for API method
     * @param \Exception $exception    The thrown exception
     */
    public function __construct($methodName, User $user, array $methodParams, \Exception $exception)
    {
        parent::__construct($methodName, $user);

        $this->methodParams = $methodParams;
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

    /**
     * Gets an array of parameters for API method.
     *
     * @return array
     */
    public function getMethodParams()
    {
        return $this->methodParams;
    }
}
