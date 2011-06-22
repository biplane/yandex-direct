<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return string
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * @param string $Phrase
     * @return WordstatItem
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * @param int $Shows
     * @return WordstatItem
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }
}