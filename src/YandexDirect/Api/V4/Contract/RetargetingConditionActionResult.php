<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingConditionActionResult
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
    protected $RetargetingConditionID;

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
     * @return RetargetingConditionActionResult
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
     * @return RetargetingConditionActionResult
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

        return $this;
    }

    /**
     * Gets the RetargetingConditionID.
     *
     * @return int
     */
    public function getRetargetingConditionID()
    {
        return $this->RetargetingConditionID;
    }

    /**
     * Sets the RetargetingConditionID.
     *
     * @param int $RetargetingConditionID
     *
     * @return RetargetingConditionActionResult
     */
    public function setRetargetingConditionID($RetargetingConditionID)
    {
        $this->RetargetingConditionID = $RetargetingConditionID;

        return $this;
    }
}