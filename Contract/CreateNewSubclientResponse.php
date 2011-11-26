<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CreateNewSubclientResponse
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $Password;
    /**
     * @var string
     */
    protected $FIO;
    /**
     * @var string
     */
    protected $Email;
    /**
     * @var int
     */
    protected $ClientID;

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return CreateNewSubclientResponse
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return CreateNewSubclientResponse
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

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
     * @return CreateNewSubclientResponse
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return CreateNewSubclientResponse
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * @return int
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * @param int $ClientID
     * @return CreateNewSubclientResponse
     */
    public function setClientID($ClientID)
    {
        $this->ClientID = $ClientID;

        return $this;
    }
}