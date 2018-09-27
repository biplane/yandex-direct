<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignSearchStrategy
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of CpmBannerCampaignSearchStrategy.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return string
     * @see CpmBannerCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param string $value
     * @return $this
     * @see CpmBannerCampaignSearchStrategyTypeEnum
     */
    public function setBiddingStrategyType($value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

