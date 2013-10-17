<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageActionResult
{
    /**
     * @var Warning[]
     */
    protected $Warnings;
    /**
     * @var Error[]
     */
    protected $Errors;
    /**
     * @var int
     */
    protected $AdImageUploadTaskID;
    /**
     * @var string
     */
    protected $AdImageHash;

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
     * Gets the Warnings.
     *
     * @return Warning[]
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * Sets the Warnings.
     *
     * @param Warning[] $Warnings
     *
     * @return AdImageActionResult
     */
    public function setWarnings(array $Warnings)
    {
        $this->Warnings = $Warnings;

        return $this;
    }

    /**
     * Gets the Errors.
     *
     * @return Error[]
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets the Errors.
     *
     * @param Error[] $Errors
     *
     * @return AdImageActionResult
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

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
     * @return AdImageActionResult
     */
    public function setAdImageUploadTaskID($AdImageUploadTaskID)
    {
        $this->AdImageUploadTaskID = $AdImageUploadTaskID;

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
     * @return AdImageActionResult
     */
    public function setAdImageHash($AdImageHash)
    {
        $this->AdImageHash = $AdImageHash;

        return $this;
    }
}