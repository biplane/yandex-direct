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
     * @return CreateNewSubclientResponse
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the Password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Sets the Password.
     *
     * @param string $Password
     *
     * @return CreateNewSubclientResponse
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;

        return $this;
    }

    /**
     * Gets the FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets the FIO.
     *
     * @param string $FIO
     *
     * @return CreateNewSubclientResponse
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * Gets the Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets the Email.
     *
     * @param string $Email
     *
     * @return CreateNewSubclientResponse
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Gets the ClientID.
     *
     * @return int
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * Sets the ClientID.
     *
     * @param int $ClientID
     *
     * @return CreateNewSubclientResponse
     */
    public function setClientID($ClientID)
    {
        $this->ClientID = $ClientID;

        return $this;
    }
}