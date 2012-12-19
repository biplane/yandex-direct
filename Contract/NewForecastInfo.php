<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Constructor.
     *
     * @param array $categories Array of int.
     * @param array $geoIds Array of int.
     * @param array $phrases Array of string.
     *
     * @deprecated
     */
    public function __construct(array $categories = null, array $geoIds = null, array $phrases = null)
    {
        $this->Categories = $categories;
        $this->GeoID = $geoIds;
        $this->Phrases = $phrases;
    }

    /**
     * Gets the Categories.
     *
     * @return int[]
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * Sets the Categories.
     *
     * @param int[] $Categories
     *
     * @return NewForecastInfo
     */
    public function setCategories(array $Categories)
    {
        $this->Categories = $Categories;

        return $this;
    }

    /**
     * Gets the Phrases.
     *
     * @return string[]
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets the Phrases.
     *
     * @param string[] $Phrases
     *
     * @return NewForecastInfo
     */
    public function setPhrases(array $Phrases)
    {
        $this->Phrases = $Phrases;

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
     * @return NewForecastInfo
     */
    public function setGeoID(array $GeoID)
    {
        $this->GeoID = $GeoID;

        return $this;
    }
}