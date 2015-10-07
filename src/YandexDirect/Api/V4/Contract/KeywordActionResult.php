<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class KeywordActionResult
{

    protected $Warnings = null;

    protected $Errors = null;

    protected $KeywordID = null;

    protected $QualityIndex = null;

    /**
     * Creates a new instance of KeywordActionResult.
     *
     * @return KeywordActionResult
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
     * Gets KeywordID.
     *
     * @return int|null
     */
    public function getKeywordID()
    {
        return $this->KeywordID;
    }

    /**
     * Sets KeywordID.
     *
     * @param int|null $value
     * @return $this
     */
    public function setKeywordID($value = null)
    {
        $this->KeywordID = $value;

        return $this;
    }

    /**
     * Gets QualityIndex.
     *
     * @return QualityIndex|null
     */
    public function getQualityIndex()
    {
        return $this->QualityIndex;
    }

    /**
     * Sets QualityIndex.
     *
     * @param QualityIndex|null $value
     * @return $this
     */
    public function setQualityIndex(QualityIndex $value = null)
    {
        $this->QualityIndex = $value;

        return $this;
    }


}

