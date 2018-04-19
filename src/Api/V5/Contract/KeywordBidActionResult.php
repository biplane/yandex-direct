<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class KeywordBidActionResult extends KeywordBidBase
{

//    Can be omit.
//    protected $Warnings = null;

//    Can be omit.
//    protected $Errors = null;

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
        return isset($this->Warnings) ? $this->Warnings : null;
    }

    /**
     * Sets Warnings.
     *
     * @param ExceptionNotification[]|null $value
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
     * @return ExceptionNotification[]|null
     */
    public function getErrors()
    {
        return isset($this->Errors) ? $this->Errors : null;
    }

    /**
     * Sets Errors.
     *
     * @param ExceptionNotification[]|null $value
     * @return $this
     */
    public function setErrors(array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }


}

