<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateAgencyClientsRequest
{

    protected $Clients = [];

    /**
     * Creates a new instance of UpdateAgencyClientsRequest.
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
     * @return AgencyClientUpdateItem[]
     */
    public function getClients()
    {
        return $this->Clients;
    }

    /**
     * Sets Clients.
     *
     * @param AgencyClientUpdateItem[] $value
     * @return self
     */
    public function setClients(array $value)
    {
        $this->Clients = $value;

        return $this;
    }


}

