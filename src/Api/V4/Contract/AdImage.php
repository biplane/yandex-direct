<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImage
{
    protected $Login = null;

    protected $AdImageHash = null;

    protected $AdImageURL = null;

    protected $Assigned = null;

    protected $Name = null;

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

    public function getAdImageHash(): string
    {
        return $this->AdImageHash;
    }

    /**
     * @return $this
     */
    public function setAdImageHash(string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    public function getAdImageURL(): string
    {
        return $this->AdImageURL;
    }

    /**
     * @return $this
     */
    public function setAdImageURL(string $value)
    {
        $this->AdImageURL = $value;

        return $this;
    }

    public function getAssigned(): string
    {
        return $this->Assigned;
    }

    /**
     * @return $this
     */
    public function setAssigned(string $value)
    {
        $this->Assigned = $value;

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
}
