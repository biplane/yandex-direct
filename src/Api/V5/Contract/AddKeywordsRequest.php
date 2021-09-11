<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddKeywordsRequest
{
    protected $Keywords = [];

    /**
     * Creates a new instance of AddKeywordsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keywords.
     *
     * @return KeywordAddItem[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param KeywordAddItem[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
