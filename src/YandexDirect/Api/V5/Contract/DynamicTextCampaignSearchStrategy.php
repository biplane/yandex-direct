<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextCampaignSearchStrategy extends DynamicTextCampaignStrategyBase
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of DynamicTextCampaignSearchStrategy.
     *
     * @return DynamicTextCampaignSearchStrategy
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return DynamicTextCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param DynamicTextCampaignSearchStrategyTypeEnum $value
     * @return $this
     */
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

