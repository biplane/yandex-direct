<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class NewForecastInfo
{

    protected $Categories = null;

    protected $Phrases = null;

    protected $GeoID = null;

    protected $Currency = null;

    protected $AuctionBids = null;

    /**
     * Creates a new instance of NewForecastInfo.
     *
     * @return NewForecastInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Categories.
     *
     * @return int[]|null
     */
    public function getCategories()
    {
        return $this->Categories;
    }

    /**
     * Sets Categories.
     *
     * @param array|null $value
     * @return $this
     */
    public function setCategories(array $value = null)
    {
        $this->Categories = $value;

        return $this;
    }

    /**
     * Gets Phrases.
     *
     * @return string[]|null
     */
    public function getPhrases()
    {
        return $this->Phrases;
    }

    /**
     * Sets Phrases.
     *
     * @param array|null $value
     * @return $this
     */
    public function setPhrases(array $value = null)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Gets GeoID.
     *
     * @return int[]|null
     */
    public function getGeoID()
    {
        return $this->GeoID;
    }

    /**
     * Sets GeoID.
     *
     * @param array|null $value
     * @return $this
     */
    public function setGeoID(array $value = null)
    {
        $this->GeoID = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return $this
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     *
     * @return string|null
     */
    public function getAuctionBids()
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAuctionBids($value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }


}

