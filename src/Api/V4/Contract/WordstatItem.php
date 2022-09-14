<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class WordstatItem
{
    protected $Phrase = null;

    protected $Shows = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getPhrase(): string
    {
        return $this->Phrase;
    }

    /**
     * @return $this
     */
    public function setPhrase(string $value)
    {
        $this->Phrase = $value;

        return $this;
    }

    public function getShows(): int
    {
        return $this->Shows;
    }

    /**
     * @return $this
     */
    public function setShows(int $value)
    {
        $this->Shows = $value;

        return $this;
    }
}
