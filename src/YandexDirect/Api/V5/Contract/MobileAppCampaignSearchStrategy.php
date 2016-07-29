<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignSearchStrategy extends MobileAppCampaignStrategyBase
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of MobileAppCampaignSearchStrategy.
     *
     * @return MobileAppCampaignSearchStrategy
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
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

