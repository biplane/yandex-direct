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

//    Can be omit.
//    protected $VideoTarget = null;

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

    /**
     * Gets VideoTarget.
     *
     * @return string|null
     * @see VideoTargetEnum
     */
    public function getVideoTarget()
    {
        return isset($this->VideoTarget) ? $this->VideoTarget : null;
    }

    /**
     * Sets VideoTarget.
     *
     * @param string|null $value
     * @return $this
     * @see VideoTargetEnum
     */
    public function setVideoTarget($value = null)
    {
        $this->VideoTarget = $value;

        return $this;
    }


}

