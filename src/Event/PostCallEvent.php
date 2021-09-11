<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\User;
use InvalidArgumentException;

class PostCallEvent extends BaseAfterCallEvent
{
    /** @var mixed */
    private $result;

    /**
     * @param string          $methodRef The fullname of API method
     * @param array<mixed>    $params    The params for method of API
     * @param User            $user      The user
     * @param ClientInterface $client    The client for API service
     * @param mixed           $response  The result from API
     * @param Units|null      $units     Information of units
     *
     * @throws InvalidArgumentException
     */
    public function __construct(
        string $methodRef,
        array $params,
        User $user,
        ClientInterface $client,
        $response,
        ?Units $units = null
    ) {
        parent::__construct($methodRef, $params, $user, $client, $units);

        $this->result = $response;
    }

    /**
     * Gets the result from API.
     *
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}
