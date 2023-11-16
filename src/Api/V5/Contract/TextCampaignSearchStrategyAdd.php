<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignSearchStrategyAdd extends TextCampaignStrategyAddBase
{
    protected $BiddingStrategyType = null;

//    Can be omitted.
//    protected $PlacementTypes = null;

    /**
     * @see TextCampaignSearchStrategyTypeEnum
     */
    public function getBiddingStrategyType(): string
    {
        return $this->BiddingStrategyType;
    }

    /**
     * @see TextCampaignSearchStrategyTypeEnum
     *
     * @return $this
     */
    public function setBiddingStrategyType(string $value)
    {
        $this->BiddingStrategyType = $value;

        return $this;
    }

    public function getPlacementTypes(): ?TextCampaignSearchStrategyPlacementTypes
    {
        return $this->PlacementTypes ?? null;
    }

    /**
     * @return $this
     */
    public function setPlacementTypes(?TextCampaignSearchStrategyPlacementTypes $value = null)
    {
        $this->PlacementTypes = $value;

        return $this;
    }
}
