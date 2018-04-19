<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GrantGetItem extends GrantItem
{

//    Can be omit.
//    protected $Agency = null;

    /**
     * Creates a new instance of GrantGetItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Agency.
     *
     * @return string|null
     */
    public function getAgency()
    {
        return isset($this->Agency) ? $this->Agency : null;
    }

    /**
     * Sets Agency.
     *
     * @param string|null $value
     * @return self
     */
    public function setAgency($value = null)
    {
        $this->Agency = $value;

        return $this;
    }


}

