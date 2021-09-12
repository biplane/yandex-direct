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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return Warning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->Warnings;
    }

    /**
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
     * @return Error[]|null
     */
    public function getErrors(): ?array
    {
        return $this->Errors;
    }

    /**
     * @param Error[]|null $value
     *
     * @return $this
     */
    public function setErrors(?array $value = null)
    {
        $this->Errors = $value;

        return $this;
    }

    public function getKeywordID(): ?int
    {
        return $this->KeywordID;
    }

    /**
     * @return $this
     */
    public function setKeywordID(?int $value = null)
    {
        $this->KeywordID = $value;

        return $this;
    }

    public function getQualityIndex(): ?QualityIndex
    {
        return $this->QualityIndex;
    }

    /**
     * @return $this
     */
    public function setQualityIndex(?QualityIndex $value = null)
    {
        $this->QualityIndex = $value;

        return $this;
    }
}
