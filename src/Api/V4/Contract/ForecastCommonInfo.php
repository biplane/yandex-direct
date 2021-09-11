<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ForecastCommonInfo
{
    protected $Geo = null;

    protected $Shows = null;

    protected $Clicks = null;

    protected $FirstPlaceClicks = null;

    protected $PremiumClicks = null;

    protected $Min = null;

    protected $Max = null;

    protected $PremiumMin = null;

    /**
     * Creates a new instance of ForecastCommonInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Geo.
     */
    public function getGeo(): string
    {
        return $this->Geo;
    }

    /**
     * Sets Geo.
     *
     * @return $this
     */
    public function setGeo(string $value)
    {
        $this->Geo = $value;

        return $this;
    }

    /**
     * Gets Shows.
     */
    public function getShows(): int
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @return $this
     */
    public function setShows(int $value)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets Clicks.
     */
    public function getClicks(): int
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @return $this
     */
    public function setClicks(int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets FirstPlaceClicks.
     */
    public function getFirstPlaceClicks(): int
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Sets FirstPlaceClicks.
     *
     * @return $this
     */
    public function setFirstPlaceClicks(int $value)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    /**
     * Gets PremiumClicks.
     */
    public function getPremiumClicks(): int
    {
        return $this->PremiumClicks;
    }

    /**
     * Sets PremiumClicks.
     *
     * @return $this
     */
    public function setPremiumClicks(int $value)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    /**
     * Gets Min.
     */
    public function getMin(): float
    {
        return $this->Min;
    }

    /**
     * Sets Min.
     *
     * @return $this
     */
    public function setMin(float $value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Gets Max.
     */
    public function getMax(): float
    {
        return $this->Max;
    }

    /**
     * Sets Max.
     *
     * @return $this
     */
    public function setMax(float $value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Gets PremiumMin.
     */
    public function getPremiumMin(): float
    {
        return $this->PremiumMin;
    }

    /**
     * Sets PremiumMin.
     *
     * @return $this
     */
    public function setPremiumMin(float $value)
    {
        $this->PremiumMin = $value;

        return $this;
    }
}
