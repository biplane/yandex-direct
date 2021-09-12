<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AgencyClientUpdateItem extends ClientUpdateItem
{
    protected $ClientId = null;

//    Can be omitted.
//    protected $Grants = null;

    public function getClientId(): int
    {
        return $this->ClientId;
    }

    /**
     * @return $this
     */
    public function setClientId(int $value)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * @return GrantItem[]|null
     */
    public function getGrants(): ?array
    {
        return $this->Grants ?? null;
    }

    /**
     * @param GrantItem[]|null $value
     *
     * @return $this
     */
    public function setGrants(?array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }
}
