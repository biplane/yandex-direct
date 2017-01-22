<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ClientBaseItem
{

    protected $ClientInfo = null;

    protected $Phone = null;

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
        return $this->ClientInfo;
    }

    /**
     * Sets ClientInfo.
     *
     * @param string|null $value
     * @return self
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
        return $this->Phone;
    }

    /**
     * Sets Phone.
     *
     * @param string|null $value
     * @return self
     */
    public function setPhone($value = null)
    {
        $this->Phone = $value;

        return $this;
    }


}

