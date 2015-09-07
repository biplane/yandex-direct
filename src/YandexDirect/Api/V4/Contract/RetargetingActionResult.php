<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingActionResult
{

    protected $Warnings = null;

    protected $Errors = null;

    protected $RetargetingID = null;

    /**
     * Creates a new instance of RetargetingActionResult.
     *
     * @return RetargetingActionResult
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
     * @param array|null $value
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
     * @param array|null $value
     * @return $this
     */
    public function setErrors(array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Gets RetargetingID.
     *
     * @return int|null
     */
    public function getRetargetingID()
    {
        return $this->RetargetingID;
    }

    /**
     * Sets RetargetingID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setRetargetingID($value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }


}

