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

//    Can be omitted.
//    protected $NegativeKeywords = null;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds = null;

//    Can be omitted.
//    protected $TrackingParams = null;

//    Can be omitted.
//    protected $MobileAppAdGroup = null;

//    Can be omitted.
//    protected $DynamicTextAdGroup = null;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroup = null;

//    Can be omitted.
//    protected $CpmBannerKeywordsAdGroup = null;

//    Can be omitted.
//    protected $CpmBannerUserProfileAdGroup = null;

//    Can be omitted.
//    protected $CpmVideoAdGroup = null;

//    Can be omitted.
//    protected $SmartAdGroup = null;

//    Can be omitted.
//    protected $TextAdGroupFeedParams = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds;
    }

    /**
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
     * @return string[]|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
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

    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * @return $this
     */
    public function setTrackingParams(?string $value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }

    public function getMobileAppAdGroup(): ?MobileAppAdGroupAdd
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupAdd $value = null)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    public function getDynamicTextAdGroup(): ?DynamicTextAdGroup
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroup $value = null)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroup
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroup $value = null)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    public function getCpmBannerKeywordsAdGroup(): ?CpmBannerKeywordsAdGroupAdd
    {
        return $this->CpmBannerKeywordsAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerKeywordsAdGroup(?CpmBannerKeywordsAdGroupAdd $value = null)
    {
        $this->CpmBannerKeywordsAdGroup = $value;

        return $this;
    }

    public function getCpmBannerUserProfileAdGroup(): ?CpmBannerUserProfileAdGroupAdd
    {
        return $this->CpmBannerUserProfileAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmBannerUserProfileAdGroup(?CpmBannerUserProfileAdGroupAdd $value = null)
    {
        $this->CpmBannerUserProfileAdGroup = $value;

        return $this;
    }

    public function getCpmVideoAdGroup(): ?CpmVideoAdGroupAdd
    {
        return $this->CpmVideoAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setCpmVideoAdGroup(?CpmVideoAdGroupAdd $value = null)
    {
        $this->CpmVideoAdGroup = $value;

        return $this;
    }

    public function getSmartAdGroup(): ?SmartAdGroupAdd
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupAdd $value = null)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    public function getTextAdGroupFeedParams(): ?TextAdGroupFeedParamsAdd
    {
        return $this->TextAdGroupFeedParams ?? null;
    }

    /**
     * @return $this
     */
    public function setTextAdGroupFeedParams(?TextAdGroupFeedParamsAdd $value = null)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }
}
