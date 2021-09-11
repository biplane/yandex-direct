<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImage
{
    protected $Login = null;

    protected $AdImageHash = null;

    protected $AdImageURL = null;

    protected $Assigned = null;

    protected $Name = null;

    /**
     * Creates a new instance of AdImage.
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
     * Gets AdImageHash.
     */
    public function getAdImageHash(): string
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @return $this
     */
    public function setAdImageHash(string $value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets AdImageURL.
     */
    public function getAdImageURL(): string
    {
        return $this->AdImageURL;
    }

    /**
     * Sets AdImageURL.
     *
     * @return $this
     */
    public function setAdImageURL(string $value)
    {
        $this->AdImageURL = $value;

        return $this;
    }

    /**
     * Gets Assigned.
     */
    public function getAssigned(): string
    {
        return $this->Assigned;
    }

    /**
     * Sets Assigned.
     *
     * @return $this
     */
    public function setAssigned(string $value)
    {
        $this->Assigned = $value;

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
}
