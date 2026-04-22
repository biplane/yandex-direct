<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdImageUpload
{
    /** @var string */
    protected $Login;

    /** @var string */
    protected $AdImageHash;

    /** @var string */
    protected $AdImageURL;

    /** @var string */
    protected $SourceURL;

    /** @var string|null */
    protected $Name = null;

    /** @var Error|null */
    protected $Error = null;

    /** @var int|null */
    protected $AdImageUploadTaskID = null;

    /** @var string|null */
    protected $Status = null;

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
     * Get SourceURL
     */
    public function getSourceURL(): string
    {
        return $this->SourceURL;
    }

    /**
     * Set SourceURL
     *
     * @return $this
     */
    public function setSourceURL(string $value)
    {
        $this->SourceURL = $value;

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

    /**
     * Get Error
     */
    public function getError(): ?Error
    {
        return $this->Error;
    }

    /**
     * Set Error
     *
     * @return $this
     */
    public function setError(?Error $value)
    {
        $this->Error = $value;

        return $this;
    }

    /**
     * Get AdImageUploadTaskID
     */
    public function getAdImageUploadTaskID(): ?int
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * Set AdImageUploadTaskID
     *
     * @return $this
     */
    public function setAdImageUploadTaskID(?int $value)
    {
        $this->AdImageUploadTaskID = $value;

        return $this;
    }

    /**
     * Get Status
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Set Status
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }
}
