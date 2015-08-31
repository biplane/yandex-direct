<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ClientsUnitInfo
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var int
     */
    protected $UnitsRest;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return ClientsUnitInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the UnitsRest.
     *
     * @return int
     */
    public function getUnitsRest()
    {
        return $this->UnitsRest;
    }

    /**
     * Sets the UnitsRest.
     *
     * @param int $UnitsRest
     *
     * @return ClientsUnitInfo
     */
    public function setUnitsRest($UnitsRest)
    {
        $this->UnitsRest = $UnitsRest;

        return $this;
    }
}