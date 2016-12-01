<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientsUnitInfo
{

    protected $Login = null;

    protected $UnitsRest = null;

    /**
     * Creates a new instance of ClientsUnitInfo.
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
     * Gets UnitsRest.
     *
     * @return int
     */
    public function getUnitsRest()
    {
        return $this->UnitsRest;
    }

    /**
     * Sets UnitsRest.
     *
     * @param int $value
     * @return self
     */
    public function setUnitsRest($value)
    {
        $this->UnitsRest = $value;

        return $this;
    }


}

