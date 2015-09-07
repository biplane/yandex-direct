<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreateNewSubclientResponse
{

    protected $Login = null;

    protected $Password = null;

    protected $FIO = null;

    protected $Email = null;

    protected $ClientID = null;

    /**
     * Creates a new instance of CreateNewSubclientResponse.
     *
     * @return CreateNewSubclientResponse
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
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Sets Password.
     *
     * @param string $value
     * @return $this
     */
    public function setPassword($value)
    {
        $this->Password = $value;

        return $this;
    }

    /**
     * Gets FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets FIO.
     *
     * @param string $value
     * @return $this
     */
    public function setFIO($value)
    {
        $this->FIO = $value;

        return $this;
    }

    /**
     * Gets Email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string $value
     * @return $this
     */
    public function setEmail($value)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets ClientID.
     *
     * @return int
     */
    public function getClientID()
    {
        return $this->ClientID;
    }

    /**
     * Sets ClientID.
     *
     * @param int $value
     * @return $this
     */
    public function setClientID($value)
    {
        $this->ClientID = $value;

        return $this;
    }


}

