<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return ClientsUnitInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnitsRest()
    {
        return $this->UnitsRest;
    }

    /**
     * @param int $UnitsRest
     * @return ClientsUnitInfo
     */
    public function setUnitsRest($UnitsRest)
    {
        $this->UnitsRest = $UnitsRest;

        return $this;
    }
}