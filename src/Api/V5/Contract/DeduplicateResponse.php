<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponse
{
//    Can be omit.
//    protected $Add = null;

//    Can be omit.
//    protected $Update = null;

//    Can be omit.
//    protected $Delete = null;

//    Can be omit.
//    protected $Failure = null;

    /**
     * Creates a new instance of DeduplicateResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Add.
     *
     * @return DeduplicateResponseAddItem[]|null
     */
    public function getAdd(): ?array
    {
        return $this->Add ?? null;
    }

    /**
     * Sets Add.
     *
     * @param DeduplicateResponseAddItem[]|null $value
     *
     * @return $this
     */
    public function setAdd(?array $value = null)
    {
        $this->Add = $value;

        return $this;
    }

    /**
     * Gets Update.
     *
     * @return DeduplicateResponseUpdateItem[]|null
     */
    public function getUpdate(): ?array
    {
        return $this->Update ?? null;
    }

    /**
     * Sets Update.
     *
     * @param DeduplicateResponseUpdateItem[]|null $value
     *
     * @return $this
     */
    public function setUpdate(?array $value = null)
    {
        $this->Update = $value;

        return $this;
    }

    /**
     * Gets Delete.
     */
    public function getDelete(): ?IdsCriteria
    {
        return $this->Delete ?? null;
    }

    /**
     * Sets Delete.
     *
     * @return $this
     */
    public function setDelete(?IdsCriteria $value = null)
    {
        $this->Delete = $value;

        return $this;
    }

    /**
     * Gets Failure.
     *
     * @return DeduplicateErrorItem[]|null
     */
    public function getFailure(): ?array
    {
        return $this->Failure ?? null;
    }

    /**
     * Sets Failure.
     *
     * @param DeduplicateErrorItem[]|null $value
     *
     * @return $this
     */
    public function setFailure(?array $value = null)
    {
        $this->Failure = $value;

        return $this;
    }
}
