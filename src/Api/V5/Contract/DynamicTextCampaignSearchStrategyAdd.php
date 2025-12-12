<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextCampaignSearchStrategyAdd extends DynamicTextCampaignStrategyAddBase
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $PlacementTypes = null;

    /**
     * @see DynamicTextCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see DynamicTextCampaignSearchStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getPlacementTypes(): ?DynamicTextCampaignSearchStrategyPlacementTypesAdd
    {
        return $this->PlacementTypes ?? null;
    }

    /**
     * @return $this
     */
    public function setPlacementTypes(?DynamicTextCampaignSearchStrategyPlacementTypesAdd $value = null)
    {
        $this->PlacementTypes = $value;

        return $this;
    }
}
