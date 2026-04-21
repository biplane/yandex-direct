<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class WordstatReportInfo
{
    /** @var string */
    protected $Phrase;

//    Can be omitted.
//    protected $GeoID;

//    Can be omitted.
//    protected $SearchedWith;

//    Can be omitted.
//    protected $SearchedAlso;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Phrase
     */
    public function getPhrase(): string
    {
        return $this->Phrase;
    }

    /**
     * Set Phrase
     *
     * @return $this
     */
    public function setPhrase(string $value)
    {
        $this->Phrase = $value;

        return $this;
    }

    /**
     * Get GeoID
     *
     * @return list<int>
     */
    public function getGeoID(): array
    {
        return $this->GeoID ?? [];
    }

    /**
     * Set GeoID
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setGeoID(array $value)
    {
        $this->GeoID = $value;

        return $this;
    }

    /**
     * Get SearchedWith
     *
     * @return list<WordstatItem>
     */
    public function getSearchedWith(): array
    {
        return $this->SearchedWith ?? [];
    }

    /**
     * Set SearchedWith
     *
     * @param list<WordstatItem> $value
     *
     * @return $this
     */
    public function setSearchedWith(array $value)
    {
        $this->SearchedWith = $value;

        return $this;
    }

    /**
     * Get SearchedAlso
     *
     * @return list<WordstatItem>
     */
    public function getSearchedAlso(): array
    {
        return $this->SearchedAlso ?? [];
    }

    /**
     * Set SearchedAlso
     *
     * @param list<WordstatItem> $value
     *
     * @return $this
     */
    public function setSearchedAlso(array $value)
    {
        $this->SearchedAlso = $value;

        return $this;
    }
}
