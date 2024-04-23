<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAppCampaignGetItem
{
//    Can be omitted.
//    protected $BiddingStrategy = null;

//    Can be omitted.
//    protected $Settings = null;

//    Can be omitted.
//    protected $PackageBiddingStrategy = null;

//    Can be omitted.
//    protected $CanBeUsedAsPackageBiddingStrategySource = null;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getBiddingStrategy(): ?MobileAppCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setBiddingStrategy(?MobileAppCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * @return MobileAppCampaignSettingGet[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * @param MobileAppCampaignSettingGet[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }

    public function getPackageBiddingStrategy(): ?MobileAppCampaignPackageBiddingStrategyGet
    {
        return $this->PackageBiddingStrategy ?? null;
    }

    /**
     * @return $this
     */
    public function setPackageBiddingStrategy(?MobileAppCampaignPackageBiddingStrategyGet $value = null)
    {
        $this->PackageBiddingStrategy = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getCanBeUsedAsPackageBiddingStrategySource(): ?string
    {
        return $this->CanBeUsedAsPackageBiddingStrategySource ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setCanBeUsedAsPackageBiddingStrategySource(?string $value = null)
    {
        $this->CanBeUsedAsPackageBiddingStrategySource = $value;

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
