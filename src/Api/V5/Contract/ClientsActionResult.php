<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientsActionResult extends ActionResultBase
{
//    Can be omitted.
//    protected $ClientId = null;

    public function getClientId(): ?int
    {
        return $this->ClientId ?? null;
    }

    /**
     * @return $this
     */
    public function setClientId(?int $value = null)
    {
        $this->ClientId = $value;

        return $this;
    }
}
