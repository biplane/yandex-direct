<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DeduplicateResponseAddItem
{
    protected $Keyword = null;

    /**
     * Creates a new instance of DeduplicateResponseAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keyword.
     */
    public function getKeyword(): string
    {
        return $this->Keyword;
    }

    /**
     * Sets Keyword.
     *
     * @return $this
     */
    public function setKeyword(string $value)
    {
        $this->Keyword = $value;

        return $this;
    }
}
