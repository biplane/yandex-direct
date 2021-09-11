<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignGetItem extends CpmBannerCampaignBase
{
//    Can be omit.
//    protected $BiddingStrategy = null;

//    Can be omit.
//    protected $Settings = null;

    /**
     * Creates a new instance of CpmBannerCampaignGetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     */
    public function getBiddingStrategy(): ?CpmBannerCampaignStrategy
    {
        return $this->BiddingStrategy ?? null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @return $this
     */
    public function setBiddingStrategy(?CpmBannerCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return CpmBannerCampaignSettingGet[]|null
     */
    public function getSettings(): ?array
    {
        return $this->Settings ?? null;
    }

    /**
     * Sets Settings.
     *
     * @param CpmBannerCampaignSettingGet[]|null $value
     *
     * @return $this
     */
    public function setSettings(?array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }
}
