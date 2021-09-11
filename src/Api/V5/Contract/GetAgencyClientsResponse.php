<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Clients.
     *
     * @return ClientGetItem[]|null
     */
    public function getClients(): ?array
    {
        return $this->Clients ?? null;
    }

    /**
     * Sets Clients.
     *
     * @param ClientGetItem[]|null $value
     *
     * @return $this
     */
    public function setClients(?array $value = null)
    {
        $this->Clients = $value;

        return $this;
    }
}
