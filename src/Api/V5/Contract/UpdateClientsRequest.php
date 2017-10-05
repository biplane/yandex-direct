<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateClientsRequest
{

    protected $Clients = [];

    /**
     * Creates a new instance of UpdateClientsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Clients.
     *
     * @return ClientUpdateItem[]
     */
    public function getClients()
    {
        return $this->Clients;
    }

    /**
     * Sets Clients.
     *
     * @param ClientUpdateItem[] $value
     * @return self
     */
    public function setClients(array $value)
    {
        $this->Clients = $value;

        return $this;
    }


}

