<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Categories.
     *
     * @return int[]|null
     */
    public function getCategories(): ?array
    {
        return $this->Categories;
    }

    /**
     * Sets Categories.
     *
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
     * Gets Phrases.
     *
     * @return string[]|null
     */
    public function getPhrases(): ?array
    {
        return $this->Phrases;
    }

    /**
     * Sets Phrases.
     *
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
     * Gets GeoID.
     *
     * @return int[]|null
     */
    public function getGeoID(): ?array
    {
        return $this->GeoID;
    }

    /**
     * Sets GeoID.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setGeoID(?array $value = null)
    {
        $this->GeoID = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets AuctionBids.
     */
    public function getAuctionBids(): ?string
    {
        return $this->AuctionBids;
    }

    /**
     * Sets AuctionBids.
     *
     * @return $this
     */
    public function setAuctionBids(?string $value = null)
    {
        $this->AuctionBids = $value;

        return $this;
    }
}
