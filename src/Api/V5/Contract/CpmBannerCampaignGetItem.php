<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets BiddingStrategy.
     *
     * @return CpmBannerCampaignStrategy|null
     */
    public function getBiddingStrategy()
    {
        return isset($this->BiddingStrategy) ? $this->BiddingStrategy : null;
    }

    /**
     * Sets BiddingStrategy.
     *
     * @param CpmBannerCampaignStrategy|null $value
     * @return $this
     */
    public function setBiddingStrategy(CpmBannerCampaignStrategy $value = null)
    {
        $this->BiddingStrategy = $value;

        return $this;
    }

    /**
     * Gets Settings.
     *
     * @return CpmBannerCampaignSettingGet[]|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }

    /**
     * Sets Settings.
     *
     * @param CpmBannerCampaignSettingGet[]|null $value
     * @return $this
     */
    public function setSettings(array $value = null)
    {
        $this->Settings = $value;

        return $this;
    }


}

