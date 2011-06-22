<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class ForecastCommonInfo
{
    /**
     * @var int
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
     * @return int
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * @param int $Geo
     * @return ForecastCommonInfo
     */
    public function setGeo($Geo)
    {
        $this->Geo = $Geo;

        return $this;
    }

    /**
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * @param int $Shows
     * @return ForecastCommonInfo
     */
    public function setShows($Shows)
    {
        $this->Shows = $Shows;

        return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * @param int $Clicks
     * @return ForecastCommonInfo
     */
    public function setClicks($Clicks)
    {
        $this->Clicks = $Clicks;

        return $this;
    }

    /**
     * @return int
     */
    public function getFirstPlaceClicks()
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * @param int $FirstPlaceClicks
     * @return ForecastCommonInfo
     */
    public function setFirstPlaceClicks($FirstPlaceClicks)
    {
        $this->FirstPlaceClicks = $FirstPlaceClicks;

        return $this;
    }

    /**
     * @return int
     */
    public function getPremiumClicks()
    {
        return $this->PremiumClicks;
    }

    /**
     * @param int $PremiumClicks
     * @return ForecastCommonInfo
     */
    public function setPremiumClicks($PremiumClicks)
    {
        $this->PremiumClicks = $PremiumClicks;

        return $this;
    }

    /**
     * @return float
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * @param float $Min
     * @return ForecastCommonInfo
     */
    public function setMin($Min)
    {
        $this->Min = $Min;

        return $this;
    }

    /**
     * @return float
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * @param float $Max
     * @return ForecastCommonInfo
     */
    public function setMax($Max)
    {
        $this->Max = $Max;

        return $this;
    }

    /**
     * @return float
     */
    public function getPremiumMin()
    {
        return $this->PremiumMin;
    }

    /**
     * @param float $PremiumMin
     * @return ForecastCommonInfo
     */
    public function setPremiumMin($PremiumMin)
    {
        $this->PremiumMin = $PremiumMin;

        return $this;
    }
}