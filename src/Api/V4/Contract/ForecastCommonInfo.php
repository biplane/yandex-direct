<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Geo.
     *
     * @return string
     */
    public function getGeo()
    {
        return $this->Geo;
    }

    /**
     * Sets Geo.
     *
     * @param string $value
     * @return $this
     */
    public function setGeo($value)
    {
        $this->Geo = $value;

        return $this;
    }

    /**
     * Gets Shows.
     *
     * @return int
     */
    public function getShows()
    {
        return $this->Shows;
    }

    /**
     * Sets Shows.
     *
     * @param int $value
     * @return $this
     */
    public function setShows($value)
    {
        $this->Shows = $value;

        return $this;
    }

    /**
     * Gets Clicks.
     *
     * @return int
     */
    public function getClicks()
    {
        return $this->Clicks;
    }

    /**
     * Sets Clicks.
     *
     * @param int $value
     * @return $this
     */
    public function setClicks($value)
    {
        $this->Clicks = $value;

        return $this;
    }

    /**
     * Gets FirstPlaceClicks.
     *
     * @return int
     */
    public function getFirstPlaceClicks()
    {
        return $this->FirstPlaceClicks;
    }

    /**
     * Sets FirstPlaceClicks.
     *
     * @param int $value
     * @return $this
     */
    public function setFirstPlaceClicks($value)
    {
        $this->FirstPlaceClicks = $value;

        return $this;
    }

    /**
     * Gets PremiumClicks.
     *
     * @return int
     */
    public function getPremiumClicks()
    {
        return $this->PremiumClicks;
    }

    /**
     * Sets PremiumClicks.
     *
     * @param int $value
     * @return $this
     */
    public function setPremiumClicks($value)
    {
        $this->PremiumClicks = $value;

        return $this;
    }

    /**
     * Gets Min.
     *
     * @return float
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * Sets Min.
     *
     * @param float $value
     * @return $this
     */
    public function setMin($value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Gets Max.
     *
     * @return float
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * Sets Max.
     *
     * @param float $value
     * @return $this
     */
    public function setMax($value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Gets PremiumMin.
     *
     * @return float
     */
    public function getPremiumMin()
    {
        return $this->PremiumMin;
    }

    /**
     * Sets PremiumMin.
     *
     * @param float $value
     * @return $this
     */
    public function setPremiumMin($value)
    {
        $this->PremiumMin = $value;

        return $this;
    }


}

