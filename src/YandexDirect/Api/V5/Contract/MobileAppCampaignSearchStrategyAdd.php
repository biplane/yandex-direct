<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignSearchStrategyAdd extends MobileAppCampaignStrategyAddBase
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of MobileAppCampaignSearchStrategyAdd.
     *
     * @return MobileAppCampaignSearchStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return MobileAppCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param MobileAppCampaignSearchStrategyTypeEnum $value
     * @return $this
     */
    public function setBiddingStrategyType(MobileAppCampaignSearchStrategyTypeEnum $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

