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
    protected $Categories = null;

    protected $Phrases = null;

    protected $CommonMinusWords = null;

    protected $GeoID = null;

    protected $Currency = null;

    protected $AuctionBids = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getCategories(): ?array
    {
        return $this->Categories;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCategories(?array $value = null)
    {
        $this->Categories = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getPhrases(): ?array
    {
        return $this->Phrases;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setPhrases(?array $value = null)
    {
        $this->Phrases = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getCommonMinusWords(): ?array
    {
        return $this->CommonMinusWords;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setCommonMinusWords(?array $value = null)
    {
        $this->CommonMinusWords = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getGeoID(): ?array
    {
        return $this->GeoID;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setGeoID(?array $value = null)
    {
        $this->GeoID = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getAuctionBids(): ?string
    {
        return $this->AuctionBids;
    }

    /**
     * @return $this
     */
    public function setAuctionBids(?string $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }
}
