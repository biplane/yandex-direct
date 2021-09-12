<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignNetworkStrategy
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

    public function getWbMaximumImpressions(): ?StrategyWbMaximumImpressions
    {
        return $this->WbMaximumImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setWbMaximumImpressions(?StrategyWbMaximumImpressions $value = null)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    public function getCpMaximumImpressions(): ?StrategyCpMaximumImpressions
    {
        return $this->CpMaximumImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setCpMaximumImpressions(?StrategyCpMaximumImpressions $value = null)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    public function getWbDecreasedPriceForRepeatedImpressions(): ?StrategyWbDecreasedPriceForRepeatedImpressions
    {
        return $this->WbDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(?StrategyWbDecreasedPriceForRepeatedImpressions $value = null)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    public function getCpDecreasedPriceForRepeatedImpressions(): ?StrategyCpDecreasedPriceForRepeatedImpressions
    {
        return $this->CpDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(?StrategyCpDecreasedPriceForRepeatedImpressions $value = null)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    public function getWbAverageCpv(): ?StrategyWbAverageCpv
    {
        return $this->WbAverageCpv ?? null;
    }

    /**
     * @return $this
     */
    public function setWbAverageCpv(?StrategyWbAverageCpv $value = null)
    {
        $this->WbAverageCpv = $value;

        return $this;
    }

    public function getCpAverageCpv(): ?StrategyCpAverageCpv
    {
        return $this->CpAverageCpv ?? null;
    }

    /**
     * @return $this
     */
    public function setCpAverageCpv(?StrategyCpAverageCpv $value = null)
    {
        $this->CpAverageCpv = $value;

        return $this;
    }
}
