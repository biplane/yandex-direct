<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmBannerCampaignNetworkStrategy
{
    /** @var 'MANUAL_CPM'|'WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS'|'CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS'|'WB_MAXIMUM_IMPRESSIONS'|'CP_MAXIMUM_IMPRESSIONS'|'WB_AVERAGE_CPV'|'CP_AVERAGE_CPV'|'UNKNOWN' */
    protected $BiddingStrategyType;

//    Can be omitted.
//    protected $WbMaximumImpressions;

//    Can be omitted.
//    protected $CpMaximumImpressions;

//    Can be omitted.
//    protected $WbDecreasedPriceForRepeatedImpressions;

//    Can be omitted.
//    protected $CpDecreasedPriceForRepeatedImpressions;

//    Can be omitted.
//    protected $WbAverageCpv;

//    Can be omitted.
//    protected $CpAverageCpv;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyTypeEnum
     *
     * @return 'MANUAL_CPM'|'WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS'|'CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS'|'WB_MAXIMUM_IMPRESSIONS'|'CP_MAXIMUM_IMPRESSIONS'|'WB_AVERAGE_CPV'|'CP_AVERAGE_CPV'|'UNKNOWN'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyTypeEnum
     *
     * @param 'MANUAL_CPM'|'WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS'|'CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS'|'WB_MAXIMUM_IMPRESSIONS'|'CP_MAXIMUM_IMPRESSIONS'|'WB_AVERAGE_CPV'|'CP_AVERAGE_CPV'|'UNKNOWN' $value
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Get WbMaximumImpressions
     */
    public function getWbMaximumImpressions(): ?StrategyWbMaximumImpressions
    {
        return $this->WbMaximumImpressions ?? null;
    }

    /**
     * Set WbMaximumImpressions
     *
     * @return $this
     */
    public function setWbMaximumImpressions(?StrategyWbMaximumImpressions $value)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    /**
     * Get CpMaximumImpressions
     */
    public function getCpMaximumImpressions(): ?StrategyCpMaximumImpressions
    {
        return $this->CpMaximumImpressions ?? null;
    }

    /**
     * Set CpMaximumImpressions
     *
     * @return $this
     */
    public function setCpMaximumImpressions(?StrategyCpMaximumImpressions $value)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    /**
     * Get WbDecreasedPriceForRepeatedImpressions
     */
    public function getWbDecreasedPriceForRepeatedImpressions(): ?StrategyWbDecreasedPriceForRepeatedImpressions
    {
        return $this->WbDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * Set WbDecreasedPriceForRepeatedImpressions
     *
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(?StrategyWbDecreasedPriceForRepeatedImpressions $value)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Get CpDecreasedPriceForRepeatedImpressions
     */
    public function getCpDecreasedPriceForRepeatedImpressions(): ?StrategyCpDecreasedPriceForRepeatedImpressions
    {
        return $this->CpDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * Set CpDecreasedPriceForRepeatedImpressions
     *
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(?StrategyCpDecreasedPriceForRepeatedImpressions $value)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Get WbAverageCpv
     */
    public function getWbAverageCpv(): ?StrategyWbAverageCpv
    {
        return $this->WbAverageCpv ?? null;
    }

    /**
     * Set WbAverageCpv
     *
     * @return $this
     */
    public function setWbAverageCpv(?StrategyWbAverageCpv $value)
    {
        $this->WbAverageCpv = $value;

        return $this;
    }

    /**
     * Get CpAverageCpv
     */
    public function getCpAverageCpv(): ?StrategyCpAverageCpv
    {
        return $this->CpAverageCpv ?? null;
    }

    /**
     * Set CpAverageCpv
     *
     * @return $this
     */
    public function setCpAverageCpv(?StrategyCpAverageCpv $value)
    {
        $this->CpAverageCpv = $value;

        return $this;
    }
}
