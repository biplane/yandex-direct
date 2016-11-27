<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class RetargetingConditionActionResult
{

    protected $Warnings = null;

    protected $Errors = null;

    protected $RetargetingConditionID = null;

    /**
     * Creates a new instance of RetargetingConditionActionResult.
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
     * Gets RetargetingConditionID.
     *
     * @return int|null
     */
    public function getRetargetingConditionID()
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets RetargetingConditionID.
     *
     * @param int|null $value
     * @return self
     */
    public function setRetargetingConditionID($value = null)
    {
        $this->RetargetingConditionID = $value;

        return $this;
    }


}

