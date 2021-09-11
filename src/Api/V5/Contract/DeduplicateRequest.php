<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateRequest
{
//    Can be omit.
//    protected $Operation = null;

    protected $Keywords = [];

    /**
     * Creates a new instance of DeduplicateRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Operation.
     *
     * @see DeduplicateOperationEnum
     *
     * @return string[]|null
     */
    public function getOperation(): ?array
    {
        return $this->Operation ?? null;
    }

    /**
     * Sets Operation.
     *
     * @see DeduplicateOperationEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setOperation(?array $value = null)
    {
        $this->Operation = $value;

        return $this;
    }

    /**
     * Gets Keywords.
     *
     * @return DeduplicateRequestItem[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param DeduplicateRequestItem[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
