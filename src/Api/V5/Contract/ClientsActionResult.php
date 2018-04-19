<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientsActionResult extends ActionResultBase
{

//    Can be omit.
//    protected $ClientId = null;

    /**
     * Creates a new instance of ClientsActionResult.
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
     * @return int|null
     */
    public function getClientId()
    {
        return isset($this->ClientId) ? $this->ClientId : null;
    }

    /**
     * Sets ClientId.
     *
     * @param int|null $value
     * @return self
     */
    public function setClientId($value = null)
    {
        $this->ClientId = $value;

        return $this;
    }


}

