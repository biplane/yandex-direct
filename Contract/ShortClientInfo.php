<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class ShortClientInfo
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $FIO;
    /**
     * @var string
     */
    protected $Role;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return ShortClientInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * @param string $FIO
     * @return ShortClientInfo
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * @param string $Role
     * @return ShortClientInfo
     */
    public function setRole($Role)
    {
        $this->Role = $Role;

        return $this;
    }
}