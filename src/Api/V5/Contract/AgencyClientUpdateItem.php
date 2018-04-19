<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ClientId.
     *
     * @return int
     */
    public function getClientId()
    {
        return $this->ClientId;
    }

    /**
     * Sets ClientId.
     *
     * @param int $value
     * @return self
     */
    public function setClientId($value)
    {
        $this->ClientId = $value;

        return $this;
    }

    /**
     * Gets Grants.
     *
     * @return GrantItem[]|null
     */
    public function getGrants()
    {
        return isset($this->Grants) ? $this->Grants : null;
    }

    /**
     * Sets Grants.
     *
     * @param GrantItem[]|null $value
     * @return self
     */
    public function setGrants(array $value = null)
    {
        $this->Grants = $value;

        return $this;
    }


}

