<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddAgencyClientsResponse extends ActionResultBase
{

//    Can be omit.
//    protected $Login = null;

//    Can be omit.
//    protected $Password = null;

//    Can be omit.
//    protected $Email = null;

//    Can be omit.
//    protected $ClientId = null;

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
        return isset($this->Login) ? $this->Login : null;
    }

    /**
     * Sets Login.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Password) ? $this->Password : null;
    }

    /**
     * Sets Password.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->Email) ? $this->Email : null;
    }

    /**
     * Sets Email.
     *
     * @param string|null $value
     * @return $this
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
        return isset($this->ClientId) ? $this->ClientId : null;
    }

    /**
     * Sets ClientId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setClientId($value = null)
    {
        $this->ClientId = $value;

        return $this;
    }


}

