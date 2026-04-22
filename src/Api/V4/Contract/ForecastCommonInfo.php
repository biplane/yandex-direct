<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ForecastCommonInfo
{
    /** @var string */
    protected $Geo;

    /** @var int */
    protected $Shows;

    /** @var int */
    protected $Clicks;

    /** @var int */
    protected $FirstPlaceClicks;

    /** @var int */
    protected $PremiumClicks;

    /** @var float */
    protected $Min;

    /** @var float */
    protected $Max;

    /** @var float */
    protected $PremiumMin;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Geo
     */
    public function getGeo(): string
    {
        return $this->Geo;
    }

    /**
     * Set Geo
     *
     * @return $this
     */
    public function setGeo(string $value)
    {
        $this->Geo = $value;

        return $this;
    }

    /**
     * Get Shows
     */
    public function getShows(): int
    {
        return $this->Shows;
    }

    /**
     * Set Shows
     *
     * @return $this
     */
    public function setShows(int $value)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Get Clicks
     */
    public function getClicks(): int
    {
        return $this->Clicks;
    }

    /**
     * Set Clicks
     *
     * @return $this
     */
    public function setClicks(int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Get FirstPlaceClicks
     */
    public function getFirstPlaceClicks(): int
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Set FirstPlaceClicks
     *
     * @return $this
     */
    public function setFirstPlaceClicks(int $value)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    /**
     * Get PremiumClicks
     */
    public function getPremiumClicks(): int
    {
        return $this->PremiumClicks;
    }

    /**
     * Set PremiumClicks
     *
     * @return $this
     */
    public function setPremiumClicks(int $value)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    /**
     * Get Min
     */
    public function getMin(): float
    {
        return $this->Min;
    }

    /**
     * Set Min
     *
     * @return $this
     */
    public function setMin(float $value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Get Max
     */
    public function getMax(): float
    {
        return $this->Max;
    }

    /**
     * Set Max
     *
     * @return $this
     */
    public function setMax(float $value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Get PremiumMin
     */
    public function getPremiumMin(): float
    {
        return $this->PremiumMin;
    }

    /**
     * Set PremiumMin
     *
     * @return $this
     */
    public function setPremiumMin(float $value)
    {
        $this->PremiumMin = $value;

        return $this;
    }
}
