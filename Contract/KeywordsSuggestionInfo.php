<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class KeywordsSuggestionInfo
{
    /**
     * @var string[]
     */
    protected $Keywords;

    /**
     * @return string[]
     */
    public function getKeywords()
    {
        return $this->Keywords;
    }

    /**
     * @param string[] $Keywords
     * @return KeywordsSuggestionInfo
     */
    public function setKeywords(array $Keywords)
    {
        $this->Keywords = $Keywords;

        return $this;
    }
}