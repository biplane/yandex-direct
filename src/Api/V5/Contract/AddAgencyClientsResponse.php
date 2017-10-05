<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAgencyClientsResponse extends ActionResultBase
{

    protected $Login = null;

    protected $Password = null;

    protected $Email = null;

    protected $ClientId = null;

    /**
     * Creates a new instance of AddAgencyClientsResponse.
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
     * @return string|null
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return self
     */
    public function setLogin($value = null)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets Password.
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Sets Password.
     *
     * @param string|null $value
     * @return self
     */
    public function setPassword($value = null)
    {
        $this->Password = $value;

        return $this;
    }

    /**
     * Gets Email.
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Sets Email.
     *
     * @param string|null $value
     * @return self
     */
    public function setEmail($value = null)
    {
        $this->Email = $value;

        return $this;
    }

    /**
     * Gets ClientId.
     *
     * @return int|null
     */
    public function getClientId()
    {
        return $this->ClientId;
    }

    /**
     * Sets ClientId.
     *
     * @param int|null $value
     * @return self
     */
    public function setClientId($value = null)
    {
        $this->ClientId = $value;

        return $this;
    }


}

