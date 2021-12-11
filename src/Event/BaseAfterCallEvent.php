<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Event;

use Biplane\YandexDirect\Api\Units;
use Biplane\YandexDirect\ClientInterface;
use Biplane\YandexDirect\User;
use InvalidArgumentException;

abstract class BaseAfterCallEvent extends PreCallEvent
{
    /** @var ClientInterface */
    private $client;

    /** @var Units  */
    private $units;

    /**
     * @param string          $methodRef The fullname of API method
     * @param array<mixed>    $params    The params for method of API
     * @param User            $user      The user
     * @param ClientInterface $client    The client for API service
     * @param Units|null      $units     Information of units
     *
     * @throws InvalidArgumentException
     */
    public function __construct(string $methodRef, array $params, User $user, ClientInterface $client, ?Units $units = null)
    {
        parent::__construct($methodRef, $params, $user);

        if ($units === null) {
            $units = new Units(-1, -1, -1, '');
        }

        $this->client = $client;
        $this->units = $units;
    }

    /**
     * Gets the request identifier.
     */
    public function getRequestId(): string
    {
        return $this->client->getRequestId();
    }

    /**
     * Gets headers and content of HTTP request.
     */
    public function getRequest(): string
    {
        return $this->client->getLastRequest();
    }

    /**
     * Gets headers and content of HTTP response.
     */
    public function getResponse(): string
    {
        return $this->client->getLastResponse();
    }

    /**
     * Gets info about units.
     */
    public function getUnits(): Units
    {
        return $this->units;
    }
}
