<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PackageBiddingStrategyAddBase
{
//    Can be omitted.
//    protected $StrategyId;

//    Can be omitted.
//    protected $StrategyFromCampaignId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get StrategyId
     */
    public function getStrategyId(): ?int
    {
        return $this->StrategyId ?? null;
    }

    /**
     * Set StrategyId
     *
     * @return $this
     */
    public function setStrategyId(?int $value)
    {
        $this->StrategyId = $value;

        return $this;
    }

    /**
     * Get StrategyFromCampaignId
     */
    public function getStrategyFromCampaignId(): ?int
    {
        return $this->StrategyFromCampaignId ?? null;
    }

    /**
     * Set StrategyFromCampaignId
     *
     * @return $this
     */
    public function setStrategyFromCampaignId(?int $value)
    {
        $this->StrategyFromCampaignId = $value;

        return $this;
    }
}
