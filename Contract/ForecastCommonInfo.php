<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ForecastCommonInfo
{
    /**
     * @var string
     */
    protected $Geo;
    /**
     * @var int
     */
    protected $Shows;
    /**
     * @var int
     */
    protected $Clicks;
    /**
     * @var int
     */
    protected $FirstPlaceClicks;
    /**
     * @var int
     */
    protected $PremiumClicks;
    /**
     * @var float
     */
    protected $Min;
    /**
     * @var float
     */
    protected $Max;
    /**
     * @var float
     */
    protected $PremiumMin;

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
     * Gets the Geo.
     *
     * @return string
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * Sets the Geo.
     *
     * @param string $Geo
     *
     * @return ForecastCommonInfo
     */
    public function setGeo($Geo)
    {
        $this->Geo = $Geo;

        return $this;
    }

    /**
     * Gets the Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets the Shows.
     *
     * @param int $Shows
     *
     * @return ForecastCommonInfo
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * Gets the Clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets the Clicks.
     *
     * @param int $Clicks
     *
     * @return ForecastCommonInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * Gets the FirstPlaceClicks.
     *
     * @return int
     */
    public function getFirstPlaceClicks()
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Sets the FirstPlaceClicks.
     *
     * @param int $FirstPlaceClicks
     *
     * @return ForecastCommonInfo
     */
    public function setFirstPlaceClicks($FirstPlaceClicks)
    {
        $this->FirstPlaceClicks = $FirstPlaceClicks;

        return $this;
    }

    /**
     * Gets the PremiumClicks.
     *
     * @return int
     */
    public function getPremiumClicks()
    {
        return $this->PremiumClicks;
    }

    /**
     * Sets the PremiumClicks.
     *
     * @param int $PremiumClicks
     *
     * @return ForecastCommonInfo
     */
    public function setPremiumClicks($PremiumClicks)
    {
        $this->PremiumClicks = $PremiumClicks;

        return $this;
    }

    /**
     * Gets the Min.
     *
     * @return float
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * Sets the Min.
     *
     * @param float $Min
     *
     * @return ForecastCommonInfo
     */
    public function setMin($Min)
    {
        $this->Min = $Min;

        return $this;
    }

    /**
     * Gets the Max.
     *
     * @return float
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * Sets the Max.
     *
     * @param float $Max
     *
     * @return ForecastCommonInfo
     */
    public function setMax($Max)
    {
        $this->Max = $Max;

        return $this;
    }

    /**
     * Gets the PremiumMin.
     *
     * @return float
     */
    public function getPremiumMin()
    {
        return $this->PremiumMin;
    }

    /**
     * Sets the PremiumMin.
     *
     * @param float $PremiumMin
     *
     * @return ForecastCommonInfo
     */
    public function setPremiumMin($PremiumMin)
    {
        $this->PremiumMin = $PremiumMin;

        return $this;
    }
}