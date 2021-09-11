<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateKeywordsRequest
{
    protected $Keywords = [];

    /**
     * Creates a new instance of UpdateKeywordsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keywords.
     *
     * @return KeywordUpdateItem[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param KeywordUpdateItem[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
