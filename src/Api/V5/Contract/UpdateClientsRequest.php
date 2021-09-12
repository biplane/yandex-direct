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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return ClientUpdateItem[]
     */
    public function getClients(): array
    {
        return $this->Clients;
    }

    /**
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
