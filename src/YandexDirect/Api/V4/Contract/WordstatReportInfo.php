<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class WordstatReportInfo
{
    /**
     * @var string
     */
    protected $Phrase;
    /**
     * @var int[]
     */
    protected $GeoID;
    /**
     * @var WordstatItem[]
     */
    protected $SearchedWith;
    /**
     * @var WordstatItem[]
     */
    protected $SearchedAlso;

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
     * @return WordstatReportInfo
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * Gets the GeoID.
     *
     * @return int[]
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * Sets the GeoID.
     *
     * @param int[] $GeoID
     *
     * @return WordstatReportInfo
     */
    public function setGeoID(array $GeoID)
    {
        $this->GeoID = $GeoID;

        return $this;
    }

    /**
     * Gets the SearchedWith.
     *
     * @return WordstatItem[]
     */
    public function getSearchedWith()
    {
        return $this->SearchedWith;
    }

    /**
     * Sets the SearchedWith.
     *
     * @param WordstatItem[] $SearchedWith
     *
     * @return WordstatReportInfo
     */
    public function setSearchedWith(array $SearchedWith)
    {
        $this->SearchedWith = $SearchedWith;

        return $this;
    }

    /**
     * Gets the SearchedAlso.
     *
     * @return WordstatItem[]
     */
    public function getSearchedAlso()
    {
        return $this->SearchedAlso;
    }

    /**
     * Sets the SearchedAlso.
     *
     * @param WordstatItem[] $SearchedAlso
     *
     * @return WordstatReportInfo
     */
    public function setSearchedAlso(array $SearchedAlso)
    {
        $this->SearchedAlso = $SearchedAlso;

        return $this;
    }
}