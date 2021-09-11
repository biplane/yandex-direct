<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\User;
use Throwable;

class FailCallEvent extends BaseAfterCallEvent
{
    /** @var Throwable */
    private $exception;

    /**
     * @param string          $methodRef The fullname of API method
     * @param array<mixed>    $params    The params for method of API
     * @param User            $user      The configuration
     * @param ClientInterface $client    The client for API service
     * @param Throwable       $exception The thrown exception
     * @param Units|null      $units     Information of units
     */
    public function __construct(
        string $methodRef,
        array $params,
        User $user,
        ClientInterface $client,
        Throwable $exception,
        ?Units $units = null
    ) {
        parent::__construct($methodRef, $params, $user, $client, $units);

        $this->exception = $exception;
    }

    /**
     * Gets the thrown exception.
     */
    public function getException(): Throwable
    {
        return $this->exception;
    }
}
