<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class AdImageAssociationActionResult
{

    protected $Warnings = null;

    protected $Errors = null;

    protected $AdID = null;

    /**
     * Creates a new instance of AdImageAssociationActionResult.
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
     * Gets AdID.
     *
     * @return int|null
     */
    public function getAdID()
    {
        return $this->AdID;
    }

    /**
     * Sets AdID.
     *
     * @param int|null $value
     * @return self
     */
    public function setAdID($value = null)
    {
        $this->AdID = $value;

        return $this;
    }


}

