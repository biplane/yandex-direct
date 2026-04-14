<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DeduplicateRequest
{
//    Can be omitted.
//    protected $Operation;

    /** @var non-empty-list<DeduplicateRequestItem> */
    protected $Keywords;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Operation
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DeduplicateOperationEnum
     *
     * @return list<'MERGE_DUPLICATES'|'ELIMINATE_OVERLAPPING'>
     */
    public function getOperation(): array
    {
        return $this->Operation ?? [];
    }

    /**
     * Set Operation
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DeduplicateOperationEnum
     *
     * @param list<'MERGE_DUPLICATES'|'ELIMINATE_OVERLAPPING'> $value
     *
     * @return $this
     */
    public function setOperation(array $value)
    {
        $this->Operation = $value;

        return $this;
    }

    /**
     * Get Keywords
     *
     * @return non-empty-list<DeduplicateRequestItem>
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Set Keywords
     *
     * @param non-empty-list<DeduplicateRequestItem> $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
