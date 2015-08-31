<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class RetargetingActionResult
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
    protected $RetargetingID;

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
     * @return RetargetingActionResult
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
     * @return RetargetingActionResult
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

        return $this;
    }

    /**
     * Gets the RetargetingID.
     *
     * @return int
     */
    public function getRetargetingID()
    {
        return $this->RetargetingID;
    }

    /**
     * Sets the RetargetingID.
     *
     * @param int $RetargetingID
     *
     * @return RetargetingActionResult
     */
    public function setRetargetingID($RetargetingID)
    {
        $this->RetargetingID = $RetargetingID;

        return $this;
    }
}