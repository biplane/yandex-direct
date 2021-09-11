<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAgencyClientsRequest
{
    protected $Clients = [];

    /**
     * Creates a new instance of UpdateAgencyClientsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Clients.
     *
     * @return AgencyClientUpdateItem[]
     */
    public function getClients(): array
    {
        return $this->Clients;
    }

    /**
     * Sets Clients.
     *
     * @param AgencyClientUpdateItem[] $value
     *
     * @return $this
     */
    public function setClients(array $value)
    {
        $this->Clients = $value;

        return $this;
    }
}
