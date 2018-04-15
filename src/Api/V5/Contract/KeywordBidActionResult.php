<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidActionResult extends KeywordBidBase
{

    protected $Warnings = null;

    protected $Errors = null;

    /**
     * Creates a new instance of KeywordBidActionResult.
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
     * @return ExceptionNotification[]|null
     */
    public function getWarnings()
    {
        return $this->Warnings;
    }

    /**
     * Sets Warnings.
     *
     * @param ExceptionNotification[]|null $value
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
     * @return ExceptionNotification[]|null
     */
    public function getErrors()
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param ExceptionNotification[]|null $value
     * @return self
     */
    public function setErrors(array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }


}

