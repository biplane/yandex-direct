<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class NewForecastInfo
{
    /**
     * @var int[]
     */
    protected $Categories;
    /**
     * @var string[]
     */
    protected $Phrases;
    /**
     * @var int[]
     */
    protected $GeoID;

    /**
     * @param array $categories Array of int.
     * @param array $geoIds Array of int.
     * @param array $phrases Array of string.
     */
    public function __construct(array $categories = null, array $geoIds = null, array $phrases = null)
    {
        $this->Categories = $categories;
        $this->GeoID = $geoIds;
        $this->Phrases = $phrases;
    }

    /**
     * @return int[]
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * @param int[] $Categories
     * @return NewForecastInfo
     */
    public function setCategories(array $Categories)
    {
        $this->Categories = $Categories;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * @param string[] $Phrases
     * @return NewForecastInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

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
     * @return NewForecastInfo
     */
    public function setGeoID(array $GeoID)
    {
        $this->GeoID = $GeoID;

        return $this;
    }
}