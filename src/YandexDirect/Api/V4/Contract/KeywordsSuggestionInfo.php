<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class KeywordsSuggestionInfo
{
    /**
     * @var string[]
     */
    protected $Keywords;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Keywords.
     *
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * Sets the Keywords.
     *
     * @param string[] $Keywords
     *
     * @return KeywordsSuggestionInfo
     */
    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;

        return $this;
    }
}