<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class KeywordsSuggestionInfo
{
    protected $Keywords = [];

    /**
     * Creates a new instance of KeywordsSuggestionInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Keywords.
     *
     * @return string[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
     * @param string[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
