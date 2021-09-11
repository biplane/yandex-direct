<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets AgencyLogin.
     */
    public function getAgencyLogin(): ?string
    {
        return $this->AgencyLogin;
    }

    /**
     * Sets AgencyLogin.
     *
     * @return $this
     */
    public function setAgencyLogin(?string $value = null)
    {
        $this->AgencyLogin = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Surname.
     */
    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    /**
     * Sets Surname.
     *
     * @return $this
     */
    public function setSurname(?string $value = null)
    {
        $this->Surname = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
