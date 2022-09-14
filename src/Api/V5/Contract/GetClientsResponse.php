<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetClientsResponse
{
//    Can be omitted.
//    protected $Clients = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

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
