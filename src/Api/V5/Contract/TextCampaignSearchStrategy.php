<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignSearchStrategy extends TextCampaignStrategyBase
{
    /** @var 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'HIGHEST_POSITION'|'IMPRESSIONS_BELOW_SEARCH'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'MAX_PROFIT' */
    protected $BiddingStrategyType;

//    Can be omitted.
//    protected $PlacementTypes;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyTypeEnum
     *
     * @return 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'HIGHEST_POSITION'|'IMPRESSIONS_BELOW_SEARCH'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'MAX_PROFIT'
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * Set BiddingStrategyType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyTypeEnum
     *
     * @param 'AVERAGE_CPC'|'AVERAGE_CPA'|'PAY_FOR_CONVERSION'|'WB_MAXIMUM_CONVERSION_RATE'|'HIGHEST_POSITION'|'IMPRESSIONS_BELOW_SEARCH'|'SERVING_OFF'|'UNKNOWN'|'WB_MAXIMUM_CLICKS'|'WEEKLY_CLICK_PACKAGE'|'AVERAGE_ROI'|'AVERAGE_CRR'|'PAY_FOR_CONVERSION_CRR'|'AVERAGE_CPA_MULTIPLE_GOALS'|'PAY_FOR_CONVERSION_MULTIPLE_GOALS'|'MAX_PROFIT' $value
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    /**
     * Get PlacementTypes
     */
    public function getPlacementTypes(): ?TextCampaignSearchStrategyPlacementTypes
    {
        return $this->PlacementTypes ?? null;
    }

    /**
     * Set PlacementTypes
     *
     * @return $this
     */
    public function setPlacementTypes(?TextCampaignSearchStrategyPlacementTypes $value)
    {
        $this->PlacementTypes = $value;

        return $this;
    }
}
