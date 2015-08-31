<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class WordstatItem
{
    /**
     * @var string
     */
    protected $Phrase;
    /**
     * @var int
     */
    protected $Shows;

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
     * Gets the Phrase.
     *
     * @return string
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * Sets the Phrase.
     *
     * @param string $Phrase
     *
     * @return WordstatItem
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * Gets the Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets the Shows.
     *
     * @param int $Shows
     *
     * @return WordstatItem
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }
}