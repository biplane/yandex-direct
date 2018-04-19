<?php

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
     * Creates a new instance of WordstatReportInfo.
     *
     * @return self
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
     * Gets GeoID.
     *
     * @return int[]
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * Sets GeoID.
     *
     * @param int[] $value
     * @return $this
     */
    public function setGeoID(array $value)
    {
        $this->GeoID = $value;

        return $this;
    }

    /**
     * Gets SearchedWith.
     *
     * @return WordstatItem[]
     */
    public function getSearchedWith()
    {
        return $this->SearchedWith;
    }

    /**
     * Sets SearchedWith.
     *
     * @param WordstatItem[] $value
     * @return $this
     */
    public function setSearchedWith(array $value)
    {
        $this->SearchedWith = $value;

        return $this;
    }

    /**
     * Gets SearchedAlso.
     *
     * @return WordstatItem[]
     */
    public function getSearchedAlso()
    {
        return $this->SearchedAlso;
    }

    /**
     * Sets SearchedAlso.
     *
     * @param WordstatItem[] $value
     * @return $this
     */
    public function setSearchedAlso(array $value)
    {
        $this->SearchedAlso = $value;

        return $this;
    }


}

