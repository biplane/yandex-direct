<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignNetworkStrategy extends MobileAppCampaignStrategyBase
{
    /** @var 'NETWORK_DEFAULT'|'MAXIMUM_COVERAGE'|'AVERAGE_CPC'|'AVERAGE_CPI'|'WB_MAXIMUM_APP_INSTALLS'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'PAY_FOR_INSTALL' */
    protected $BiddingStrategyType;

//    Can be omitted.
//    protected $NetworkDefault;

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
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyTypeEnum
     *
     * @return 'NETWORK_DEFAULT'|'MAXIMUM_COVERAGE'|'AVERAGE_CPC'|'AVERAGE_CPI'|'WB_MAXIMUM_APP_INSTALLS'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'PAY_FOR_INSTALL'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyTypeEnum
     *
     * @param 'NETWORK_DEFAULT'|'MAXIMUM_COVERAGE'|'AVERAGE_CPC'|'AVERAGE_CPI'|'WB_MAXIMUM_APP_INSTALLS'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'PAY_FOR_INSTALL' $value
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Get NetworkDefault
     */
    public function getNetworkDefault(): ?StrategyNetworkDefault
    {
        return $this->NetworkDefault ?? null;
    }

    /**
     * Set NetworkDefault
     *
     * @return $this
     */
    public function setNetworkDefault(?StrategyNetworkDefault $value)
    {
        $this->NetworkDefault = $value;

        return $this;
    }
}
