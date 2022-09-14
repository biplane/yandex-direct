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
    protected $Geo = null;

    protected $Shows = null;

    protected $Clicks = null;

    protected $FirstPlaceClicks = null;

    protected $PremiumClicks = null;

    protected $Min = null;

    protected $Max = null;

    protected $PremiumMin = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getGeo(): string
    {
        return $this->Geo;
    }

    /**
     * @return $this
     */
    public function setGeo(string $value)
    {
        $this->Geo = $value;

        return $this;
    }

    public function getShows(): int
    {
        return $this->Shows;
    }

    /**
     * @return $this
     */
    public function setShows(int $value)
    {
        $this->Shows = $value;

        return $this;
    }

    public function getClicks(): int
    {
        return $this->Clicks;
    }

    /**
     * @return $this
     */
    public function setClicks(int $value)
    {
        $this->Clicks = $value;

        return $this;
    }

    public function getFirstPlaceClicks(): int
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * @return $this
     */
    public function setFirstPlaceClicks(int $value)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    public function getPremiumClicks(): int
    {
        return $this->PremiumClicks;
    }

    /**
     * @return $this
     */
    public function setPremiumClicks(int $value)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    public function getMin(): float
    {
        return $this->Min;
    }

    /**
     * @return $this
     */
    public function setMin(float $value)
    {
        $this->Min = $value;

        return $this;
    }

    public function getMax(): float
    {
        return $this->Max;
    }

    /**
     * @return $this
     */
    public function setMax(float $value)
    {
        $this->Max = $value;

        return $this;
    }

    public function getPremiumMin(): float
    {
        return $this->PremiumMin;
    }

    /**
     * @return $this
     */
    public function setPremiumMin(float $value)
    {
        $this->PremiumMin = $value;

        return $this;
    }
}
