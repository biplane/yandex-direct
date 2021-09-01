<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignNetworkStrategy
{

    protected $BiddingStrategyType = null;

//    Can be omit.
//    protected $WbMaximumImpressions = null;

//    Can be omit.
//    protected $CpMaximumImpressions = null;

//    Can be omit.
//    protected $WbDecreasedPriceForRepeatedImpressions = null;

//    Can be omit.
//    protected $CpDecreasedPriceForRepeatedImpressions = null;

//    Can be omit.
//    protected $WbAverageCpv = null;

//    Can be omit.
//    protected $CpAverageCpv = null;

    /**
     * Creates a new instance of CpmBannerCampaignNetworkStrategy.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return string
     * @see CpmBannerCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param string $value
     * @return $this
     * @see CpmBannerCampaignNetworkStrategyTypeEnum
     */
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Gets WbMaximumImpressions.
     *
     * @return StrategyWbMaximumImpressions|null
     */
    public function getWbMaximumImpressions()
    {
        return isset($this->WbMaximumImpressions) ? $this->WbMaximumImpressions : null;
    }

    /**
     * Sets WbMaximumImpressions.
     *
     * @param StrategyWbMaximumImpressions|null $value
     * @return $this
     */
    public function setWbMaximumImpressions(StrategyWbMaximumImpressions $value = null)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets CpMaximumImpressions.
     *
     * @return StrategyCpMaximumImpressions|null
     */
    public function getCpMaximumImpressions()
    {
        return isset($this->CpMaximumImpressions) ? $this->CpMaximumImpressions : null;
    }

    /**
     * Sets CpMaximumImpressions.
     *
     * @param StrategyCpMaximumImpressions|null $value
     * @return $this
     */
    public function setCpMaximumImpressions(StrategyCpMaximumImpressions $value = null)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets WbDecreasedPriceForRepeatedImpressions.
     *
     * @return StrategyWbDecreasedPriceForRepeatedImpressions|null
     */
    public function getWbDecreasedPriceForRepeatedImpressions()
    {
        return isset($this->WbDecreasedPriceForRepeatedImpressions) ? $this->WbDecreasedPriceForRepeatedImpressions : null;
    }

    /**
     * Sets WbDecreasedPriceForRepeatedImpressions.
     *
     * @param StrategyWbDecreasedPriceForRepeatedImpressions|null $value
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(StrategyWbDecreasedPriceForRepeatedImpressions $value = null)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets CpDecreasedPriceForRepeatedImpressions.
     *
     * @return StrategyCpDecreasedPriceForRepeatedImpressions|null
     */
    public function getCpDecreasedPriceForRepeatedImpressions()
    {
        return isset($this->CpDecreasedPriceForRepeatedImpressions) ? $this->CpDecreasedPriceForRepeatedImpressions : null;
    }

    /**
     * Sets CpDecreasedPriceForRepeatedImpressions.
     *
     * @param StrategyCpDecreasedPriceForRepeatedImpressions|null $value
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(StrategyCpDecreasedPriceForRepeatedImpressions $value = null)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets WbAverageCpv.
     *
     * @return StrategyWbAverageCpv|null
     */
    public function getWbAverageCpv()
    {
        return isset($this->WbAverageCpv) ? $this->WbAverageCpv : null;
    }

    /**
     * Sets WbAverageCpv.
     *
     * @param StrategyWbAverageCpv|null $value
     * @return $this
     */
    public function setWbAverageCpv(StrategyWbAverageCpv $value = null)
    {
        $this->WbAverageCpv = $value;

        return $this;
    }

    /**
     * Gets CpAverageCpv.
     *
     * @return StrategyCpAverageCpv|null
     */
    public function getCpAverageCpv()
    {
        return isset($this->CpAverageCpv) ? $this->CpAverageCpv : null;
    }

    /**
     * Sets CpAverageCpv.
     *
     * @param StrategyCpAverageCpv|null $value
     * @return $this
     */
    public function setCpAverageCpv(StrategyCpAverageCpv $value = null)
    {
        $this->CpAverageCpv = $value;

        return $this;
    }


}

