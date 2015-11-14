<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextCampaignSearchStrategyAdd extends TextCampaignStrategyAddBase
{

    protected $BiddingStrategyType = null;

    /**
     * Creates a new instance of TextCampaignSearchStrategyAdd.
     *
     * @return TextCampaignSearchStrategyAdd
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategyType.
     *
     * @return TextCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType()
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Sets BiddingStrategyType.
     *
     * @param TextCampaignSearchStrategyTypeEnum $value
     * @return $this
     */
    public function setBiddingStrategyType(TextCampaignSearchStrategyTypeEnum $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }


}

