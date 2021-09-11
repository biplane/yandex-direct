<?php

declare(strict_types=1);

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
    public function getWbMaximumImpressions(): ?StrategyWbMaximumImpressions
    {
        return $this->WbMaximumImpressions ?? null;
    }

    /**
     * Sets WbMaximumImpressions.
     *
     * @return $this
     */
    public function setWbMaximumImpressions(?StrategyWbMaximumImpressions $value = null)
    {
        $this->WbMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets CpMaximumImpressions.
     */
    public function getCpMaximumImpressions(): ?StrategyCpMaximumImpressions
    {
        return $this->CpMaximumImpressions ?? null;
    }

    /**
     * Sets CpMaximumImpressions.
     *
     * @return $this
     */
    public function setCpMaximumImpressions(?StrategyCpMaximumImpressions $value = null)
    {
        $this->CpMaximumImpressions = $value;

        return $this;
    }

    /**
     * Gets WbDecreasedPriceForRepeatedImpressions.
     */
    public function getWbDecreasedPriceForRepeatedImpressions(): ?StrategyWbDecreasedPriceForRepeatedImpressions
    {
        return $this->WbDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * Sets WbDecreasedPriceForRepeatedImpressions.
     *
     * @return $this
     */
    public function setWbDecreasedPriceForRepeatedImpressions(?StrategyWbDecreasedPriceForRepeatedImpressions $value = null)
    {
        $this->WbDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets CpDecreasedPriceForRepeatedImpressions.
     */
    public function getCpDecreasedPriceForRepeatedImpressions(): ?StrategyCpDecreasedPriceForRepeatedImpressions
    {
        return $this->CpDecreasedPriceForRepeatedImpressions ?? null;
    }

    /**
     * Sets CpDecreasedPriceForRepeatedImpressions.
     *
     * @return $this
     */
    public function setCpDecreasedPriceForRepeatedImpressions(?StrategyCpDecreasedPriceForRepeatedImpressions $value = null)
    {
        $this->CpDecreasedPriceForRepeatedImpressions = $value;

        return $this;
    }

    /**
     * Gets WbAverageCpv.
     */
    public function getWbAverageCpv(): ?StrategyWbAverageCpv
    {
        return $this->WbAverageCpv ?? null;
    }

    /**
     * Sets WbAverageCpv.
     *
     * @return $this
     */
    public function setWbAverageCpv(?StrategyWbAverageCpv $value = null)
    {
        $this->WbAverageCpv = $value;

        return $this;
    }

    /**
     * Gets CpAverageCpv.
     */
    public function getCpAverageCpv(): ?StrategyCpAverageCpv
    {
        return $this->CpAverageCpv ?? null;
    }

    /**
     * Sets CpAverageCpv.
     *
     * @return $this
     */
    public function setCpAverageCpv(?StrategyCpAverageCpv $value = null)
    {
        $this->CpAverageCpv = $value;

        return $this;
    }
}
