<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientBaseItem
{

//    Can be omit.
//    protected $ClientInfo = null;

//    Can be omit.
//    protected $Phone = null;

    /**
     * Creates a new instance of ClientBaseItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ClientInfo.
     *
     * @return string|null
     */
    public function getClientInfo()
    {
        return isset($this->ClientInfo) ? $this->ClientInfo : null;
    }

    /**
     * Sets ClientInfo.
     *
     * @param string|null $value
     * @return $this
     */
    public function setClientInfo($value = null)
    {
        $this->ClientInfo = $value;

        return $this;
    }

    /**
     * Gets Phone.
     *
     * @return string|null
     */
    public function getPhone()
    {
        return isset($this->Phone) ? $this->Phone : null;
    }

    /**
     * Sets Phone.
     *
     * @param string|null $value
     * @return $this
     */
    public function setPhone($value = null)
    {
        $this->Phone = $value;

        return $this;
    }


}

