<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * @param string $Login
     * @return CreateNewSubclientRequest
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * @return string
     */
    public function getAgencyLogin()
    {
        return $this->AgencyLogin;
    }

    /**
     * @param string $AgencyLogin
     * @return CreateNewSubclientRequest
     */
    public function setAgencyLogin($AgencyLogin)
    {
        $this->AgencyLogin = $AgencyLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $Name
     * @return CreateNewSubclientRequest
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSurname()
    {
        return $this->Surname;
    }

    /**
     * @param string $Surname
     * @return CreateNewSubclientRequest
     */
    public function setSurname($Surname)
    {
        $this->Surname = $Surname;

        return $this;
    }
}