<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAgencyClientsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $Clients = null;

    /**
     * Creates a new instance of GetAgencyClientsResponse.
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
     * @return ClientGetItem[]|null
     */
    public function getClients()
    {
        return isset($this->Clients) ? $this->Clients : null;
    }

    /**
     * Sets Clients.
     *
     * @param ClientGetItem[]|null $value
     * @return self
     */
    public function setClients(array $value = null)
    {
        $this->Clients = $value;

        return $this;
    }


}

