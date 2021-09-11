<?php

declare(strict_types=1);

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
//    protected $DynamicTextFeedAdGroup = null;

//    Can be omit.
//    protected $CpmBannerKeywordsAdGroup = null;

//    Can be omit.
//    protected $CpmBannerUserProfileAdGroup = null;

//    Can be omit.
//    protected $CpmVideoAdGroup = null;

//    Can be omit.
//    protected $SmartAdGroup = null;

    /**
     * Creates a new instance of AdGroupAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets CampaignId.
     */
    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * Sets CampaignId.
     *
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[] $value
     *
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
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywordSharedSetIds.
     *
     * @return float[]|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Sets NegativeKeywordSharedSetIds.
     *
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    /**
     * Gets TrackingParams.
     */
    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * Sets TrackingParams.
     *
     * @return $this
     */
    public function setTrackingParams(?string $value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }

    /**
     * Gets MobileAppAdGroup.
     */
    public function getMobileAppAdGroup(): ?MobileAppAdGroupAdd
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * Sets MobileAppAdGroup.
     *
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupAdd $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextAdGroup.
     */
    public function getDynamicTextAdGroup(): ?DynamicTextAdGroup
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * Sets DynamicTextAdGroup.
     *
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Gets DynamicTextFeedAdGroup.
     */
    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroup
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * Sets DynamicTextFeedAdGroup.
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroup $value = null)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Gets CpmBannerKeywordsAdGroup.
     */
    public function getCpmBannerKeywordsAdGroup(): ?CpmBannerKeywordsAdGroupAdd
    {
        return $this->CpmBannerKeywordsAdGroup ?? null;
    }

    /**
     * Sets CpmBannerKeywordsAdGroup.
     *
     * @return $this
     */
    public function setCpmBannerKeywordsAdGroup(?CpmBannerKeywordsAdGroupAdd $value = null)
    {
        $this->CpmBannerKeywordsAdGroup = $value;

        return $this;
    }

    /**
     * Gets CpmBannerUserProfileAdGroup.
     */
    public function getCpmBannerUserProfileAdGroup(): ?CpmBannerUserProfileAdGroupAdd
    {
        return $this->CpmBannerUserProfileAdGroup ?? null;
    }

    /**
     * Sets CpmBannerUserProfileAdGroup.
     *
     * @return $this
     */
    public function setCpmBannerUserProfileAdGroup(?CpmBannerUserProfileAdGroupAdd $value = null)
    {
        $this->CpmBannerUserProfileAdGroup = $value;

        return $this;
    }

    /**
     * Gets CpmVideoAdGroup.
     */
    public function getCpmVideoAdGroup(): ?CpmVideoAdGroupAdd
    {
        return $this->CpmVideoAdGroup ?? null;
    }

    /**
     * Sets CpmVideoAdGroup.
     *
     * @return $this
     */
    public function setCpmVideoAdGroup(?CpmVideoAdGroupAdd $value = null)
    {
        $this->CpmVideoAdGroup = $value;

        return $this;
    }

    /**
     * Gets SmartAdGroup.
     */
    public function getSmartAdGroup(): ?SmartAdGroupAdd
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * Sets SmartAdGroup.
     *
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupAdd $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }
}
