<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageUpload
{
    protected $Login = null;

    protected $AdImageHash = null;

    protected $AdImageURL = null;

    protected $SourceURL = null;

    protected $Name = null;

    protected $Error = null;

    protected $AdImageUploadTaskID = null;

    protected $Status = null;

    /**
     * Creates a new instance of AdImageUpload.
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
     * Gets SourceURL.
     */
    public function getSourceURL(): string
    {
        return $this->SourceURL;
    }

    /**
     * Sets SourceURL.
     *
     * @return $this
     */
    public function setSourceURL(string $value)
    {
        $this->SourceURL = $value;

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
     * Gets Error.
     */
    public function getError(): ?Error
    {
        return $this->Error;
    }

    /**
     * Sets Error.
     *
     * @return $this
     */
    public function setError(?Error $value = null)
    {
        $this->Error = $value;

        return $this;
    }

    /**
     * Gets AdImageUploadTaskID.
     */
    public function getAdImageUploadTaskID(): ?int
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * Sets AdImageUploadTaskID.
     *
     * @return $this
     */
    public function setAdImageUploadTaskID(?int $value = null)
    {
        $this->AdImageUploadTaskID = $value;

        return $this;
    }

    /**
     * Gets Status.
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }
}
