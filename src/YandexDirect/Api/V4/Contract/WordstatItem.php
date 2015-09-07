<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class WordstatItem
{

    protected $Phrase = null;

    protected $Shows = null;

    /**
     * Creates a new instance of WordstatItem.
     *
     * @return WordstatItem
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Phrase.
     *
     * @return string
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * Sets Phrase.
     *
     * @param string $value
     * @return $this
     */
    public function setPhrase($value)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Gets Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @param int $value
     * @return $this
     */
    public function setShows($value)
    {
        $this->Shows = $value;

        return $this;
    }


}

