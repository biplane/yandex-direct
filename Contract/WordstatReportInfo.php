<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return string
     */
    public function getPhrase()
    {
        return $this->Phrase;
    }

    /**
     * @param string $Phrase
     * @return WordstatReportInfo
     */
    public function setPhrase($Phrase)
    {
        $this->Phrase = $Phrase;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * @param int[] $GeoID
     * @return WordstatReportInfo
     */
    public function setGeoID(array $GeoID)
    {
        $this->GeoID = $GeoID;

        return $this;
    }

    /**
     * @return WordstatItem[]
     */
    public function getSearchedWith()
    {
        return $this->SearchedWith;
    }

    /**
     * @param WordstatItem[] $SearchedWith
     * @return WordstatReportInfo
     */
    public function setSearchedWith(array $SearchedWith)
    {
        $this->SearchedWith = $SearchedWith;

        return $this;
    }

    /**
     * @return WordstatItem[]
     */
    public function getSearchedAlso()
    {
        return $this->SearchedAlso;
    }

    /**
     * @param WordstatItem[] $SearchedAlso
     * @return WordstatReportInfo
     */
    public function setSearchedAlso(array $SearchedAlso)
    {
        $this->SearchedAlso = $SearchedAlso;

        return $this;
    }
}