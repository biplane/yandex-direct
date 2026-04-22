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
    /** @var string */
    protected $Login;

    /** @var string */
    protected $AdImageHash;

    /** @var string */
    protected $AdImageURL;

    /** @var string */
    protected $Assigned;

    /** @var string|null */
    protected $Name = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Login
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get AdImageHash
     */
    public function getAdImageHash(): string
    {
        return $this->AdImageHash;
    }

    /**
     * Set AdImageHash
     *
     * @return $this
     */
    public function setAdImageHash(string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Get AdImageURL
     */
    public function getAdImageURL(): string
    {
        return $this->AdImageURL;
    }

    /**
     * Set AdImageURL
     *
     * @return $this
     */
    public function setAdImageURL(string $value)
    {
        $this->AdImageURL = $value;

        return $this;
    }

    /**
     * Get Assigned
     */
    public function getAssigned(): string
    {
        return $this->Assigned;
    }

    /**
     * Set Assigned
     *
     * @return $this
     */
    public function setAssigned(string $value)
    {
        $this->Assigned = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }
}
