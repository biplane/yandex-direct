<?php

declare(strict_types=1);

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

//    Can be omit.
//    protected $WbAverageCpv = null;

//    Can be omit.
//    protected $CpAverageCpv = null;

    /**
     * Creates a new instance of CpmBannerCampaignNetworkStrategyAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @see CpmBannerCampaignNetworkStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @see CpmBannerCampaignNetworkStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Gets WbMaximumImpressions.
     */
    public function getWbMaximumImpressions(): ?StrategyWbMaximumImpressionsAdd
    {
        return $this->WbMaximumImpressions ?? null;
    }

    /**
     * Sets WbMaximumImpressions.
     *
     * @return $this
     */
    public function setWbMaximumImpressions(?StrategyWbMaximumImpressionsAdd $value = null)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets CpMaximumImpressions.
     */
    public function getCpMaximumImpressions(): ?StrategyCpMaximumImpressionsAdd
    {
        return $this->CpMaximumImpressions ?? null;
    }

    /**
     * Sets CpMaximumImpressions.
     *
     * @return $this
     */
    public function setCpMaximumImpressions(?StrategyCpMaximumImpressionsAdd $value = null)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets WbDecreasedPriceForRepeatedImpressions.
     */
    public function getWbDecreasedPriceForRepeatedImpressions(): ?StrategyWbDecreasedPriceForRepeatedImpressionsAdd
    {
        return $this->WbDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * Sets WbDecreasedPriceForRepeatedImpressions.
     *
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(?StrategyWbDecreasedPriceForRepeatedImpressionsAdd $value = null)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets CpDecreasedPriceForRepeatedImpressions.
     */
    public function getCpDecreasedPriceForRepeatedImpressions(): ?StrategyCpDecreasedPriceForRepeatedImpressionsAdd
    {
        return $this->CpDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * Sets CpDecreasedPriceForRepeatedImpressions.
     *
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(?StrategyCpDecreasedPriceForRepeatedImpressionsAdd $value = null)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets WbAverageCpv.
     */
    public function getWbAverageCpv(): ?StrategyWbAverageCpvAdd
    {
        return $this->WbAverageCpv ?? null;
    }

    /**
     * Sets WbAverageCpv.
     *
     * @return $this
     */
    public function setWbAverageCpv(?StrategyWbAverageCpvAdd $value = null)
    {
        $this->WbAverageCpv = $value;

        return $this;
    }

    /**
     * Gets CpAverageCpv.
     */
    public function getCpAverageCpv(): ?StrategyCpAverageCpvAdd
    {
        return $this->CpAverageCpv ?? null;
    }

    /**
     * Sets CpAverageCpv.
     *
     * @return $this
     */
    public function setCpAverageCpv(?StrategyCpAverageCpvAdd $value = null)
    {
        $this->CpAverageCpv = $value;

        return $this;
    }
}
