<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @param string $value
     * @return $this
     */
    public function setLogin($value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets AdImageHash.
     *
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string $value
     * @return $this
     */
    public function setAdImageHash($value)
    {
        $this->AdImageHash = $value;

        return $this;
    }

    /**
     * Gets AdImageURL.
     *
     * @return string
     */
    public function getAdImageURL()
    {
        return $this->AdImageURL;
    }

    /**
     * Sets AdImageURL.
     *
     * @param string $value
     * @return $this
     */
    public function setAdImageURL($value)
    {
        $this->AdImageURL = $value;

        return $this;
    }

    /**
     * Gets SourceURL.
     *
     * @return string
     */
    public function getSourceURL()
    {
        return $this->SourceURL;
    }

    /**
     * Sets SourceURL.
     *
     * @param string $value
     * @return $this
     */
    public function setSourceURL($value)
    {
        $this->SourceURL = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets Error.
     *
     * @return Error|null
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Sets Error.
     *
     * @param Error|null $value
     * @return $this
     */
    public function setError(Error $value = null)
    {
        $this->Error = $value;

        return $this;
    }

    /**
     * Gets AdImageUploadTaskID.
     *
     * @return int|null
     */
    public function getAdImageUploadTaskID()
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * Sets AdImageUploadTaskID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setAdImageUploadTaskID($value = null)
    {
        $this->AdImageUploadTaskID = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return $this
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }


}

