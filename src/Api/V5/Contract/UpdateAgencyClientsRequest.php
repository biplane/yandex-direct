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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return AgencyClientUpdateItem[]
     */
    public function getClients(): array
    {
        return $this->Clients;
    }

    /**
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
