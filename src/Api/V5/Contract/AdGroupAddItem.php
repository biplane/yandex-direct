<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupAddItem
{

    protected $Name = null;

    protected $CampaignId = null;

    protected $RegionIds = [];

//    Can be omit.
//    protected $NegativeKeywords = null;

//    Can be omit.
//    protected $NegativeKeywordSharedSetIds = null;

//    Can be omit.
//    protected $TrackingParams = null;

//    Can be omit.
//    protected $MobileAppAdGroup = null;

//    Can be omit.
//    protected $DynamicTextAdGroup = null;

//    Can be omit.
//    protected $CpmBannerKeywordsAdGroup = null;

//    Can be omit.
//    protected $CpmBannerUserProfileAdGroup = null;

//    Can be omit.
//    protected $CpmVideoAdGroup = null;

    /**
     * Creates a new instance of AdGroupAddItem.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @param int $value
     * @return $this
     */
    public function setCampaignId($value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]
     */
    public function getRegionIds()
    {
        return $this->RegionIds;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[] $value
     * @return $this
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords()
    {
        return isset($this->NegativeKeywords) ? $this->NegativeKeywords : null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywordSharedSetIds.
     *
     * @return float[]|null
     */
    public function getNegativeKeywordSharedSetIds()
    {
        return isset($this->NegativeKeywordSharedSetIds) ? $this->NegativeKeywordSharedSetIds : null;
    }

    /**
     * Sets NegativeKeywordSharedSetIds.
     *
     * @param float[]|null $value
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    /**
     * Gets TrackingParams.
     *
     * @return string|null
     */
    public function getTrackingParams()
    {
        return isset($this->TrackingParams) ? $this->TrackingParams : null;
    }

    /**
     * Sets TrackingParams.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTrackingParams($value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     *
     * @return MobileAppAdGroupAdd|null
     */
    public function getMobileAppAdGroup()
    {
        return isset($this->MobileAppAdGroup) ? $this->MobileAppAdGroup : null;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @param MobileAppAdGroupAdd|null $value
     * @return $this
     */
    public function setMobileAppAdGroup(MobileAppAdGroupAdd $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     *
     * @return DynamicTextAdGroup|null
     */
    public function getDynamicTextAdGroup()
    {
        return isset($this->DynamicTextAdGroup) ? $this->DynamicTextAdGroup : null;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @param DynamicTextAdGroup|null $value
     * @return $this
     */
    public function setDynamicTextAdGroup(DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets CpmBannerKeywordsAdGroup.
     *
     * @return CpmBannerKeywordsAdGroupAdd|null
     */
    public function getCpmBannerKeywordsAdGroup()
    {
        return isset($this->CpmBannerKeywordsAdGroup) ? $this->CpmBannerKeywordsAdGroup : null;
    }

    /**
     * Sets CpmBannerKeywordsAdGroup.
     *
     * @param CpmBannerKeywordsAdGroupAdd|null $value
     * @return $this
     */
    public function setCpmBannerKeywordsAdGroup(CpmBannerKeywordsAdGroupAdd $value = null)
    {
        $this->CpmBannerKeywordsAdGroup = $value;

        return $this;
    }

    /**
     * Gets CpmBannerUserProfileAdGroup.
     *
     * @return CpmBannerUserProfileAdGroupAdd|null
     */
    public function getCpmBannerUserProfileAdGroup()
    {
        return isset($this->CpmBannerUserProfileAdGroup) ? $this->CpmBannerUserProfileAdGroup : null;
    }

    /**
     * Sets CpmBannerUserProfileAdGroup.
     *
     * @param CpmBannerUserProfileAdGroupAdd|null $value
     * @return $this
     */
    public function setCpmBannerUserProfileAdGroup(CpmBannerUserProfileAdGroupAdd $value = null)
    {
        $this->CpmBannerUserProfileAdGroup = $value;

        return $this;
    }

    /**
     * Gets CpmVideoAdGroup.
     *
     * @return CpmVideoAdGroupAdd|null
     */
    public function getCpmVideoAdGroup()
    {
        return isset($this->CpmVideoAdGroup) ? $this->CpmVideoAdGroup : null;
    }

    /**
     * Sets CpmVideoAdGroup.
     *
     * @param CpmVideoAdGroupAdd|null $value
     * @return $this
     */
    public function setCpmVideoAdGroup(CpmVideoAdGroupAdd $value = null)
    {
        $this->CpmVideoAdGroup = $value;

        return $this;
    }


}

