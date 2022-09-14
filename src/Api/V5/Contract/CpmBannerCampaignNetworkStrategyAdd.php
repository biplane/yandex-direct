<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmBannerCampaignNetworkStrategyAdd
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $WbMaximumImpressions = null;

//    Can be omitted.
//    protected $CpMaximumImpressions = null;

//    Can be omitted.
//    protected $WbDecreasedPriceForRepeatedImpressions = null;

//    Can be omitted.
//    protected $CpDecreasedPriceForRepeatedImpressions = null;

//    Can be omitted.
//    protected $WbAverageCpv = null;

//    Can be omitted.
//    protected $CpAverageCpv = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see CpmBannerCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see CpmBannerCampaignNetworkStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getWbMaximumImpressions(): ?StrategyWbMaximumImpressionsAdd
    {
        return $this->WbMaximumImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumImpressions(?StrategyWbMaximumImpressionsAdd $value = null)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    public function getCpMaximumImpressions(): ?StrategyCpMaximumImpressionsAdd
    {
        return $this->CpMaximumImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setCpMaximumImpressions(?StrategyCpMaximumImpressionsAdd $value = null)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    public function getWbDecreasedPriceForRepeatedImpressions(): ?StrategyWbDecreasedPriceForRepeatedImpressionsAdd
    {
        return $this->WbDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(?StrategyWbDecreasedPriceForRepeatedImpressionsAdd $value = null)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    public function getCpDecreasedPriceForRepeatedImpressions(): ?StrategyCpDecreasedPriceForRepeatedImpressionsAdd
    {
        return $this->CpDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(?StrategyCpDecreasedPriceForRepeatedImpressionsAdd $value = null)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    public function getWbAverageCpv(): ?StrategyWbAverageCpvAdd
    {
        return $this->WbAverageCpv ?? null;
    }

    /**
     * @return $this
     */
    public function setWbAverageCpv(?StrategyWbAverageCpvAdd $value = null)
    {
        $this->WbAverageCpv = $value;

        return $this;
    }

    public function getCpAverageCpv(): ?StrategyCpAverageCpvAdd
    {
        return $this->CpAverageCpv ?? null;
    }

    /**
     * @return $this
     */
    public function setCpAverageCpv(?StrategyCpAverageCpvAdd $value = null)
    {
        $this->CpAverageCpv = $value;

        return $this;
    }
}
