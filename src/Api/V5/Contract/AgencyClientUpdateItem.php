<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AgencyClientUpdateItem extends ClientUpdateItem
{
    /** @var int */
    protected $ClientId;

//    Can be omitted.
//    protected $Grants;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get ClientId
     */
    public function getClientId(): int
    {
        return $this->ClientId;
    }

    /**
     * Set ClientId
     *
     * @return $this
     */
    public function setClientId(int $value)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * Get Grants
     *
     * @return list<GrantItem>
     */
    public function getGrants(): array
    {
        return $this->Grants ?? [];
    }

    /**
     * Set Grants
     *
     * @param list<GrantItem> $value
     *
     * @return $this
     */
    public function setGrants(array $value)
    {
        $this->Grants = $value;

        return $this;
    }
}
