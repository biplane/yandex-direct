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

    protected $NegativeKeywords = null;

    protected $TrackingParams = null;

    protected $MobileAppAdGroup = null;

    protected $DynamicTextAdGroup = null;

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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return struct[]|null
     */
    public function getNegativeKeywords()
    {
        return $this->NegativeKeywords;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param struct[]|null $value
     * @return self
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets TrackingParams.
     *
     * @return string|null
     */
    public function getTrackingParams()
    {
        return $this->TrackingParams;
    }

    /**
     * Sets TrackingParams.
     *
     * @param string|null $value
     * @return self
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
        return $this->MobileAppAdGroup;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @param MobileAppAdGroupAdd|null $value
     * @return self
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
        return $this->DynamicTextAdGroup;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @param DynamicTextAdGroup|null $value
     * @return self
     */
    public function setDynamicTextAdGroup(DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }


}

