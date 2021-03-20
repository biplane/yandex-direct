<?php

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
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
     * @param string          $methodRef The fullname of API method
     * @param array           $params    The params for method of API
     * @param User            $user      The configuration
     * @param ClientInterface $client    The client for API service
     * @param \Throwable      $exception The thrown exception
     * @param Units|null      $units     Information of units
     */
    public function __construct(
        $methodRef,
        array $params,
        User $user,
        ClientInterface $client,
        \Throwable $exception,
        Units $units = null
    ) {
        parent::__construct($methodRef, $params, $user, $client, $units);

        $this->exception = $exception;
    }

    /**
     * Gets the thrown exception.
     *
     * @return \Throwable
     */
    public function getException()
    {
        return $this->exception;
    }
}
