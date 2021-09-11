<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Phrase.
     */
    public function getPhrase(): string
    {
        return $this->Phrase;
    }

    /**
     * Sets Phrase.
     *
     * @return $this
     */
    public function setPhrase(string $value)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Gets Shows.
     */
    public function getShows(): int
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @return $this
     */
    public function setShows(int $value)
    {
        $this->Shows = $value;

        return $this;
    }
}
