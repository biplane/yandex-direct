<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class WordstatReportInfo
{

    protected $Phrase = null;

    protected $GeoID = array();

    protected $SearchedWith = array();

    protected $SearchedAlso = array();

    /**
     * Creates a new instance of WordstatReportInfo.
     *
     * @return WordstatReportInfo
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
     * @param array $value
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
     * @param array $value
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
     * @param array $value
     * @return $this
     */
    public function setSearchedAlso(array $value)
    {
        $this->SearchedAlso = $value;

        return $this;
    }


}

