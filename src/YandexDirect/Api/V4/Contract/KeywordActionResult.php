<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class KeywordActionResult
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
    protected $KeywordID;
    /**
     * @var QualityIndex
     */
    protected $QualityIndex;

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
     * @return KeywordActionResult
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
     * @return KeywordActionResult
     */
    public function setErrors(array $Errors)
    {
        $this->Errors = $Errors;

        return $this;
    }

    /**
     * Gets the KeywordID.
     *
     * @return int
     */
    public function getKeywordID()
    {
        return $this->KeywordID;
    }

    /**
     * Sets the KeywordID.
     *
     * @param int $KeywordID
     *
     * @return KeywordActionResult
     */
    public function setKeywordID($KeywordID)
    {
        $this->KeywordID = $KeywordID;

        return $this;
    }

    /**
     * Gets the QualityIndex.
     *
     * @return QualityIndex
     */
    public function getQualityIndex()
    {
        return $this->QualityIndex;
    }

    /**
     * Sets the QualityIndex.
     *
     * @param QualityIndex $QualityIndex
     *
     * @return KeywordActionResult
     */
    public function setQualityIndex(QualityIndex $QualityIndex)
    {
        $this->QualityIndex = $QualityIndex;

        return $this;
    }
}