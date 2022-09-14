<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CreateNewSubclientRequest
{
    protected $Login = null;

    protected $AgencyLogin = null;

    protected $Name = null;

    protected $Surname = null;

    protected $Currency = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getAgencyLogin(): ?string
    {
        return $this->AgencyLogin;
    }

    /**
     * @return $this
     */
    public function setAgencyLogin(?string $value = null)
    {
        $this->AgencyLogin = $value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->Surname;
    }

    /**
     * @return $this
     */
    public function setSurname(?string $value = null)
    {
        $this->Surname = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }
}
