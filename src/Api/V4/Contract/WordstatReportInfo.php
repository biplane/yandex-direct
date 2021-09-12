<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class WordstatReportInfo
{
    protected $Phrase = null;

    protected $GeoID = [];

    protected $SearchedWith = [];

    protected $SearchedAlso = [];

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

    /**
     * @return int[]
     */
    public function getGeoID(): array
    {
        return $this->GeoID;
    }

    /**
     * @param int[] $value
     *
     * @return $this
     */
    public function setGeoID(array $value)
    {
        $this->GeoID = $value;

        return $this;
    }

    /**
     * @return WordstatItem[]
     */
    public function getSearchedWith(): array
    {
        return $this->SearchedWith;
    }

    /**
     * @param WordstatItem[] $value
     *
     * @return $this
     */
    public function setSearchedWith(array $value)
    {
        $this->SearchedWith = $value;

        return $this;
    }

    /**
     * @return WordstatItem[]
     */
    public function getSearchedAlso(): array
    {
        return $this->SearchedAlso;
    }

    /**
     * @param WordstatItem[] $value
     *
     * @return $this
     */
    public function setSearchedAlso(array $value)
    {
        $this->SearchedAlso = $value;

        return $this;
    }
}
