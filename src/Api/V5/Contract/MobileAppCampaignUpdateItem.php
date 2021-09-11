<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppCampaignUpdateItem
{
//    Can be omit.
//    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

    /**
     * Creates a new instance of MobileAppCampaignUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     */
    public function getBiddingStrategy(): ?MobileAppCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @return $this
     */
    public function setBiddingStrategy(?MobileAppCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return MobileAppCampaignSetting[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param MobileAppCampaignSetting[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }
}
