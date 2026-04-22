<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeduplicateResponse
{
//    Can be omitted.
//    protected $Add;

//    Can be omitted.
//    protected $Update;

//    Can be omitted.
//    protected $Delete;

//    Can be omitted.
//    protected $Failure;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Add
     *
     * @return list<DeduplicateResponseAddItem>
     */
    public function getAdd(): array
    {
        return $this->Add ?? [];
    }

    /**
     * Set Add
     *
     * @param list<DeduplicateResponseAddItem> $value
     *
     * @return $this
     */
    public function setAdd(array $value)
    {
        $this->Add = $value;

        return $this;
    }

    /**
     * Get Update
     *
     * @return list<DeduplicateResponseUpdateItem>
     */
    public function getUpdate(): array
    {
        return $this->Update ?? [];
    }

    /**
     * Set Update
     *
     * @param list<DeduplicateResponseUpdateItem> $value
     *
     * @return $this
     */
    public function setUpdate(array $value)
    {
        $this->Update = $value;

        return $this;
    }

    /**
     * Get Delete
     */
    public function getDelete(): ?IdsCriteria
    {
        return $this->Delete ?? null;
    }

    /**
     * Set Delete
     *
     * @return $this
     */
    public function setDelete(?IdsCriteria $value)
    {
        $this->Delete = $value;

        return $this;
    }

    /**
     * Get Failure
     *
     * @return list<DeduplicateErrorItem>
     */
    public function getFailure(): array
    {
        return $this->Failure ?? [];
    }

    /**
     * Set Failure
     *
     * @param list<DeduplicateErrorItem> $value
     *
     * @return $this
     */
    public function setFailure(array $value)
    {
        $this->Failure = $value;

        return $this;
    }
}
