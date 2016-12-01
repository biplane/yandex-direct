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
     * @return self
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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setRetargetingID($value = null)
    {
        $this->RetargetingID = $value;

        return $this;
    }


}

