<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageLimit
{

    protected $Login = null;

    protected $Capacity = null;

    protected $Utilized = null;

    /**
     * Creates a new instance of AdImageLimit.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return self
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Capacity.
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->Capacity;
    }

    /**
     * Sets Capacity.
     *
     * @param int $value
     * @return self
     */
    public function setCapacity($value)
    {
        $this->Capacity = $value;

        return $this;
    }

    /**
     * Gets Utilized.
     *
     * @return int
     */
    public function getUtilized()
    {
        return $this->Utilized;
    }

    /**
     * Sets Utilized.
     *
     * @param int $value
     * @return self
     */
    public function setUtilized($value)
    {
        $this->Utilized = $value;

        return $this;
    }


}

