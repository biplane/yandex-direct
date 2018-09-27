<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignNetworkStrategyAdd
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

    /**
     * Creates a new instance of CpmBannerCampaignNetworkStrategyAdd.
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
     * @return StrategyWbMaximumImpressionsAdd|null
     */
    public function getWbMaximumImpressions()
    {
        return isset($this->WbMaximumImpressions) ? $this->WbMaximumImpressions : null;
    }

    /**
     * Sets WbMaximumImpressions.
     *
     * @param StrategyWbMaximumImpressionsAdd|null $value
     * @return $this
     */
    public function setWbMaximumImpressions(StrategyWbMaximumImpressionsAdd $value = null)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets CpMaximumImpressions.
     *
     * @return StrategyCpMaximumImpressionsAdd|null
     */
    public function getCpMaximumImpressions()
    {
        return isset($this->CpMaximumImpressions) ? $this->CpMaximumImpressions : null;
    }

    /**
     * Sets CpMaximumImpressions.
     *
     * @param StrategyCpMaximumImpressionsAdd|null $value
     * @return $this
     */
    public function setCpMaximumImpressions(StrategyCpMaximumImpressionsAdd $value = null)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets WbDecreasedPriceForRepeatedImpressions.
     *
     * @return StrategyWbDecreasedPriceForRepeatedImpressionsAdd|null
     */
    public function getWbDecreasedPriceForRepeatedImpressions()
    {
        return isset($this->WbDecreasedPriceForRepeatedImpressions) ? $this->WbDecreasedPriceForRepeatedImpressions : null;
    }

    /**
     * Sets WbDecreasedPriceForRepeatedImpressions.
     *
     * @param StrategyWbDecreasedPriceForRepeatedImpressionsAdd|null $value
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(StrategyWbDecreasedPriceForRepeatedImpressionsAdd $value = null)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets CpDecreasedPriceForRepeatedImpressions.
     *
     * @return StrategyCpDecreasedPriceForRepeatedImpressionsAdd|null
     */
    public function getCpDecreasedPriceForRepeatedImpressions()
    {
        return isset($this->CpDecreasedPriceForRepeatedImpressions) ? $this->CpDecreasedPriceForRepeatedImpressions : null;
    }

    /**
     * Sets CpDecreasedPriceForRepeatedImpressions.
     *
     * @param StrategyCpDecreasedPriceForRepeatedImpressionsAdd|null $value
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(StrategyCpDecreasedPriceForRepeatedImpressionsAdd $value = null)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }


}

