<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignSearchStrategy extends UnifiedCampaignStrategyBase
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $PlacementTypes = null;

    /**
     * @see UnifiedCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see UnifiedCampaignSearchStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getPlacementTypes(): ?UnifiedCampaignSearchStrategyPlacementTypes
    {
        return $this->PlacementTypes ?? null;
    }

    /**
     * @return $this
     */
    public function setPlacementTypes(?UnifiedCampaignSearchStrategyPlacementTypes $value = null)
    {
        $this->PlacementTypes = $value;

        return $this;
    }
}
