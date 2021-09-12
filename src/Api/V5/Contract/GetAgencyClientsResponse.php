<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetAgencyClientsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Clients = null;

    /**
     * @return ClientGetItem[]|null
     */
    public function getClients(): ?array
    {
        return $this->Clients ?? null;
    }

    /**
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
