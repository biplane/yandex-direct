<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignAddItem
{
    /** @var MobileAppCampaignStrategyAdd */
    protected $BiddingStrategy;

//    Can be omitted.
//    protected $Settings;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds;

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
     * Get BiddingStrategy
     */
    public function getBiddingStrategy(): MobileAppCampaignStrategyAdd
    {
        return $this->BiddingStrategy;
    }

    /**
     * Set BiddingStrategy
     *
     * @return $this
     */
    public function setBiddingStrategy(MobileAppCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Get Settings
     *
     * @return list<MobileAppCampaignSetting>
     */
    public function getSettings(): array
    {
        return $this->Settings ?? [];
    }

    /**
     * Set Settings
     *
     * @param list<MobileAppCampaignSetting> $value
     *
     * @return $this
     */
    public function setSettings(array $value)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * Get NegativeKeywordSharedSetIds
     *
     * @return non-empty-list<int>|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Set NegativeKeywordSharedSetIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }
}
