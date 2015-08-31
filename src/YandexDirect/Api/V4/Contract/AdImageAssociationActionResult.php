<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class AdImageAssociationActionResult
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
    protected $AdID;

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
     * @return AdImageAssociationActionResult
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
     * @return AdImageAssociationActionResult
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

        return $this;
    }

    /**
     * Gets the AdID.
     *
     * @return int
     */
    public function getAdID()
    {
        return $this->AdID;
    }

    /**
     * Sets the AdID.
     *
     * @param int $AdID
     *
     * @return AdImageAssociationActionResult
     */
    public function setAdID($AdID)
    {
        $this->AdID = $AdID;

        return $this;
    }
}