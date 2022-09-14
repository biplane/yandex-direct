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
//    protected $Operation = null;

    protected $Keywords = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see DeduplicateOperationEnum
     *
     * @return string[]|null
     */
    public function getOperation(): ?array
    {
        return $this->Operation ?? null;
    }

    /**
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
     * @return DeduplicateRequestItem[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
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
