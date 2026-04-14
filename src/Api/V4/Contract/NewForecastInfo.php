<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NewForecastInfo
{
//    Can be omitted.
//    protected $Categories;

//    Can be omitted.
//    protected $Phrases;

//    Can be omitted.
//    protected $CommonMinusWords;

//    Can be omitted.
//    protected $GeoID;

    /** @var string|null */
    protected $Currency = null;

    /** @var string|null */
    protected $AuctionBids = null;

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
     * Get Categories
     *
     * @return list<int>|null
     */
    public function getCategories(): ?array
    {
        return $this->Categories ?? null;
    }

    /**
     * Set Categories
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setCategories(?array $value)
    {
        $this->Categories = $value;

        return $this;
    }

    /**
     * Get Phrases
     *
     * @return list<string>|null
     */
    public function getPhrases(): ?array
    {
        return $this->Phrases ?? null;
    }

    /**
     * Set Phrases
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setPhrases(?array $value)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * Get CommonMinusWords
     *
     * @return list<string>|null
     */
    public function getCommonMinusWords(): ?array
    {
        return $this->CommonMinusWords ?? null;
    }

    /**
     * Set CommonMinusWords
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setCommonMinusWords(?array $value)
    {
        $this->CommonMinusWords = $value;

        return $this;
    }

    /**
     * Get GeoID
     *
     * @return list<int>|null
     */
    public function getGeoID(): ?array
    {
        return $this->GeoID ?? null;
    }

    /**
     * Set GeoID
     *
     * @param list<int>|null $value
     *
     * @return $this
     */
    public function setGeoID(?array $value)
    {
        $this->GeoID = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get AuctionBids
     */
    public function getAuctionBids(): ?string
    {
        return $this->AuctionBids;
    }

    /**
     * Set AuctionBids
     *
     * @return $this
     */
    public function setAuctionBids(?string $value)
    {
        $this->AuctionBids = $value;

        return $this;
    }
}
