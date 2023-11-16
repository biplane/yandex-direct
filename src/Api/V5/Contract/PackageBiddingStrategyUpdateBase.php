<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class PackageBiddingStrategyUpdateBase
{
//    Can be omitted.
//    protected $StrategyId = null;

//    Can be omitted.
//    protected $StrategyFromCampaignId = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getStrategyId(): ?int
    {
        return $this->StrategyId ?? null;
    }

    /**
     * @return $this
     */
    public function setStrategyId(?int $value = null)
    {
        $this->StrategyId = $value;

        return $this;
    }

    public function getStrategyFromCampaignId(): ?int
    {
        return $this->StrategyFromCampaignId ?? null;
    }

    /**
     * @return $this
     */
    public function setStrategyFromCampaignId(?int $value = null)
    {
        $this->StrategyFromCampaignId = $value;

        return $this;
    }
}
