<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageUpload
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $AdImageHash;
    /**
     * @var string
     */
    protected $AdImageURL;
    /**
     * @var string
     */
    protected $SourceURL;
    /**
     * @var string
     */
    protected $Name;
    /**
     * @var Error
     */
    protected $Error;
    /**
     * @var int
     */
    protected $AdImageUploadTaskID;
    /**
     * @var string
     */
    protected $Status;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return AdImageUpload
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the AdImageHash.
     *
     * @return string
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets the AdImageHash.
     *
     * @param string $AdImageHash
     *
     * @return AdImageUpload
     */
    public function setAdImageHash($AdImageHash)
    {
        $this->AdImageHash = $AdImageHash;

        return $this;
    }

    /**
     * Gets the AdImageURL.
     *
     * @return string
     */
    public function getAdImageURL()
    {
        return $this->AdImageURL;
    }

    /**
     * Sets the AdImageURL.
     *
     * @param string $AdImageURL
     *
     * @return AdImageUpload
     */
    public function setAdImageURL($AdImageURL)
    {
        $this->AdImageURL = $AdImageURL;

        return $this;
    }

    /**
     * Gets the SourceURL.
     *
     * @return string
     */
    public function getSourceURL()
    {
        return $this->SourceURL;
    }

    /**
     * Sets the SourceURL.
     *
     * @param string $SourceURL
     *
     * @return AdImageUpload
     */
    public function setSourceURL($SourceURL)
    {
        $this->SourceURL = $SourceURL;

        return $this;
    }

    /**
     * Gets the Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets the Name.
     *
     * @param string $Name
     *
     * @return AdImageUpload
     */
    public function setName($Name)
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * Gets the Error.
     *
     * @return Error
     */
    public function getError()
    {
        return $this->Error;
    }

    /**
     * Sets the Error.
     *
     * @param Error $Error
     *
     * @return AdImageUpload
     */
    public function setError(Error $Error)
    {
        $this->Error = $Error;

        return $this;
    }

    /**
     * Gets the AdImageUploadTaskID.
     *
     * @return int
     */
    public function getAdImageUploadTaskID()
    {
        return $this->AdImageUploadTaskID;
    }

    /**
     * Sets the AdImageUploadTaskID.
     *
     * @param int $AdImageUploadTaskID
     *
     * @return AdImageUpload
     */
    public function setAdImageUploadTaskID($AdImageUploadTaskID)
    {
        $this->AdImageUploadTaskID = $AdImageUploadTaskID;

        return $this;
    }

    /**
     * Gets the Status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the Status.
     *
     * @param string $Status
     *
     * @return AdImageUpload
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }
}