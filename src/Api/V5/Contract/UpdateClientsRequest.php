<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateClientsRequest
{
    protected $Clients = [];

    /**
     * Creates a new instance of UpdateClientsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Clients.
     *
     * @return ClientUpdateItem[]
     */
    public function getClients(): array
    {
        return $this->Clients;
    }

    /**
     * Sets Clients.
     *
     * @param ClientUpdateItem[] $value
     *
     * @return $this
     */
    public function setClients(array $value)
    {
        $this->Clients = $value;

        return $this;
    }
}
