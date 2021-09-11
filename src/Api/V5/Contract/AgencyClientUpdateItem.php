<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AgencyClientUpdateItem extends ClientUpdateItem
{
    protected $ClientId = null;

//    Can be omit.
//    protected $Grants = null;

    /**
     * Creates a new instance of AgencyClientUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ClientId.
     */
    public function getClientId(): int
    {
        return $this->ClientId;
    }

    /**
     * Sets ClientId.
     *
     * @return $this
     */
    public function setClientId(int $value)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * Gets Grants.
     *
     * @return GrantItem[]|null
     */
    public function getGrants(): ?array
    {
        return $this->Grants ?? null;
    }

    /**
     * Sets Grants.
     *
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
