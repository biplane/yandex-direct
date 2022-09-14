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
    protected $Login = null;

    protected $AdImageHash = null;

    protected $AdImageURL = null;

    protected $SourceURL = null;

    protected $Name = null;

    protected $Error = null;

    protected $AdImageUploadTaskID = null;

    protected $Status = null;

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

    public function getSourceURL(): string
    {
        return $this->SourceURL;
    }

    /**
     * @return $this
     */
    public function setSourceURL(string $value)
    {
        $this->SourceURL = $value;

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

    public function getError(): ?Error
    {
        return $this->Error;
    }

    /**
     * @return $this
     */
    public function setError(?Error $value = null)
    {
        $this->Error = $value;

        return $this;
    }

    public function getAdImageUploadTaskID(): ?int
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * @return $this
     */
    public function setAdImageUploadTaskID(?int $value = null)
    {
        $this->AdImageUploadTaskID = $value;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    /**
     * @return $this
     */
    public function setStatus(?string $value = null)
    {
        $this->Status = $value;

        return $this;
    }
}
