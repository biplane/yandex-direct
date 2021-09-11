<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Warnings.
     *
     * @return Warning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings;
    }

    /**
     * Sets Warnings.
     *
     * @param Warning[]|null $value
     *
     * @return $this
     */
    public function setWarnings(?array $value = null)
    {
        $this->Warnings = $value;

        return $this;
    }

    /**
     * Gets Errors.
     *
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * Sets Errors.
     *
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    /**
     * Gets KeywordID.
     */
    public function getKeywordID(): ?int
    {
        return $this->KeywordID;
    }

    /**
     * Sets KeywordID.
     *
     * @return $this
     */
    public function setKeywordID(?int $value = null)
    {
        $this->KeywordID = $value;

        return $this;
    }

    /**
     * Gets QualityIndex.
     */
    public function getQualityIndex(): ?QualityIndex
    {
        return $this->QualityIndex;
    }

    /**
     * Sets QualityIndex.
     *
     * @return $this
     */
    public function setQualityIndex(?QualityIndex $value = null)
    {
        $this->QualityIndex = $value;

        return $this;
    }
}
