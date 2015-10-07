<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageActionResult
{

    protected $Warnings = null;

    protected $Errors = null;

    protected $AdImageUploadTaskID = null;

    protected $AdImageHash = null;

    /**
     * Creates a new instance of AdImageActionResult.
     *
     * @return AdImageActionResult
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Warnings.
     *
     * @return Warning[]|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * Sets Warnings.
     *
     * @param Warning[]|null $value
     * @return $this
     */
    public function setWarnings(array $value = null)
    {
        $this->Warnings = $value;

        return $this;
    }

    /**
     * Gets Errors.
     *
     * @return Error[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param Error[]|null $value
     * @return $this
     */
    public function setErrors(array $value = null)
    {
        $this->Errors = $value;

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
     * Gets AdImageHash.
     *
     * @return string|null
     */
    public function getAdImageHash()
    {
        return $this->AdImageHash;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAdImageHash($value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }


}

