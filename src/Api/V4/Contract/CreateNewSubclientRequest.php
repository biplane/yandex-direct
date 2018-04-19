<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class CreateNewSubclientRequest
{

    protected $Login = null;

    protected $AgencyLogin = null;

    protected $Name = null;

    protected $Surname = null;

    protected $Currency = null;

    /**
     * Creates a new instance of CreateNewSubclientRequest.
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
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets AgencyLogin.
     *
     * @return string|null
     */
    public function getAgencyLogin()
    {
        return $this->AgencyLogin;
    }

    /**
     * Sets AgencyLogin.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAgencyLogin($value = null)
    {
        $this->AgencyLogin = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Surname.
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Sets Surname.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSurname($value = null)
    {
        $this->Surname = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }


}

