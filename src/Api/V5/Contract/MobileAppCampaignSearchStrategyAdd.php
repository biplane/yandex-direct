<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignSearchStrategyAdd extends MobileAppCampaignStrategyAddBase
{
    /** @var 'AVERAGE_CPC'|'AVERAGE_CPI'|'WB_MAXIMUM_APP_INSTALLS'|'HIGHEST_POSITION'|'IMPRESSIONS_BELOW_SEARCH'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'PAY_FOR_INSTALL' */
    protected $BiddingStrategyType;

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
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyTypeEnum
     *
     * @return 'AVERAGE_CPC'|'AVERAGE_CPI'|'WB_MAXIMUM_APP_INSTALLS'|'HIGHEST_POSITION'|'IMPRESSIONS_BELOW_SEARCH'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'PAY_FOR_INSTALL'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyTypeEnum
     *
     * @param 'AVERAGE_CPC'|'AVERAGE_CPI'|'WB_MAXIMUM_APP_INSTALLS'|'HIGHEST_POSITION'|'IMPRESSIONS_BELOW_SEARCH'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'PAY_FOR_INSTALL' $value
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }
}
