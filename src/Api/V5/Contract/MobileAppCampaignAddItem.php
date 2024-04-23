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
    protected $BiddingStrategy = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBiddingStrategy(): MobileAppCampaignStrategyAdd
    {
        return $this->BiddingStrategy;
    }

    /**
     * @return $this
     */
    public function setBiddingStrategy(MobileAppCampaignStrategyAdd $value)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * @return MobileAppCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * @param MobileAppCampaignSetting[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }
}
