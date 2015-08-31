<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class CreateNewSubclientRequest
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $AgencyLogin;
    /**
     * @var string
     */
    protected $Name;
    /**
     * @var string
     */
    protected $Surname;
    /**
     * @var string
     */
    protected $Currency;

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
     * @return CreateNewSubclientRequest
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the AgencyLogin.
     *
     * @return string
     */
    public function getAgencyLogin()
    {
        return $this->AgencyLogin;
    }

    /**
     * Sets the AgencyLogin.
     *
     * @param string $AgencyLogin
     *
     * @return CreateNewSubclientRequest
     */
    public function setAgencyLogin($AgencyLogin)
    {
        $this->AgencyLogin = $AgencyLogin;

        return $this;
    }

    /**
     * Gets the Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Name.
     *
     * @param string $Name
     *
     * @return CreateNewSubclientRequest
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Gets the Surname.
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * Sets the Surname.
     *
     * @param string $Surname
     *
     * @return CreateNewSubclientRequest
     */
    public function setSurname($Surname)
    {
        $this->Surname = $Surname;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return CreateNewSubclientRequest
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }
}