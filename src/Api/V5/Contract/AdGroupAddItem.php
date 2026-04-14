<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGroupAddItem
{
    /** @var string */
    protected $Name;

    /** @var int */
    protected $CampaignId;

    /** @var non-empty-list<int> */
    protected $RegionIds;

//    Can be omitted.
//    protected $NegativeKeywords;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds;

//    Can be omitted.
//    protected $TrackingParams;

//    Can be omitted.
//    protected $MobileAppAdGroup;

//    Can be omitted.
//    protected $DynamicTextAdGroup;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroup;

//    Can be omitted.
//    protected $CpmBannerKeywordsAdGroup;

//    Can be omitted.
//    protected $CpmBannerUserProfileAdGroup;

//    Can be omitted.
//    protected $CpmVideoAdGroup;

//    Can be omitted.
//    protected $SmartAdGroup;

//    Can be omitted.
//    protected $UnifiedAdGroup;

//    Can be omitted.
//    protected $TextAdGroupFeedParams;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Name
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get CampaignId
     */
    public function getCampaignId(): int
    {
        return $this->CampaignId;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get RegionIds
     *
     * @return non-empty-list<int>
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds;
    }

    /**
     * Set RegionIds
     *
     * @param non-empty-list<int> $value
     *
     * @return $this
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Get NegativeKeywords
     *
     * @return non-empty-list<string>|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Set NegativeKeywords
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Get NegativeKeywordSharedSetIds
     *
     * @return non-empty-list<int>|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Set NegativeKeywordSharedSetIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    /**
     * Get TrackingParams
     */
    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * Set TrackingParams
     *
     * @return $this
     */
    public function setTrackingParams(?string $value)
    {
        $this->TrackingParams = $value;

        return $this;
    }

    /**
     * Get MobileAppAdGroup
     */
    public function getMobileAppAdGroup(): ?MobileAppAdGroupAdd
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * Set MobileAppAdGroup
     *
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupAdd $value)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Get DynamicTextAdGroup
     */
    public function getDynamicTextAdGroup(): ?DynamicTextAdGroup
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * Set DynamicTextAdGroup
     *
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroup $value)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Get DynamicTextFeedAdGroup
     */
    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroup
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * Set DynamicTextFeedAdGroup
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroup $value)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Get CpmBannerKeywordsAdGroup
     */
    public function getCpmBannerKeywordsAdGroup(): ?CpmBannerKeywordsAdGroupAdd
    {
        return $this->CpmBannerKeywordsAdGroup ?? null;
    }

    /**
     * Set CpmBannerKeywordsAdGroup
     *
     * @return $this
     */
    public function setCpmBannerKeywordsAdGroup(?CpmBannerKeywordsAdGroupAdd $value)
    {
        $this->CpmBannerKeywordsAdGroup = $value;

        return $this;
    }

    /**
     * Get CpmBannerUserProfileAdGroup
     */
    public function getCpmBannerUserProfileAdGroup(): ?CpmBannerUserProfileAdGroupAdd
    {
        return $this->CpmBannerUserProfileAdGroup ?? null;
    }

    /**
     * Set CpmBannerUserProfileAdGroup
     *
     * @return $this
     */
    public function setCpmBannerUserProfileAdGroup(?CpmBannerUserProfileAdGroupAdd $value)
    {
        $this->CpmBannerUserProfileAdGroup = $value;

        return $this;
    }

    /**
     * Get CpmVideoAdGroup
     */
    public function getCpmVideoAdGroup(): ?CpmVideoAdGroupAdd
    {
        return $this->CpmVideoAdGroup ?? null;
    }

    /**
     * Set CpmVideoAdGroup
     *
     * @return $this
     */
    public function setCpmVideoAdGroup(?CpmVideoAdGroupAdd $value)
    {
        $this->CpmVideoAdGroup = $value;

        return $this;
    }

    /**
     * Get SmartAdGroup
     */
    public function getSmartAdGroup(): ?SmartAdGroupAdd
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * Set SmartAdGroup
     *
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupAdd $value)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * Get UnifiedAdGroup
     */
    public function getUnifiedAdGroup(): ?UnifiedAdGroupAdd
    {
        return $this->UnifiedAdGroup ?? null;
    }

    /**
     * Set UnifiedAdGroup
     *
     * @return $this
     */
    public function setUnifiedAdGroup(?UnifiedAdGroupAdd $value)
    {
        $this->UnifiedAdGroup = $value;

        return $this;
    }

    /**
     * Get TextAdGroupFeedParams
     */
    public function getTextAdGroupFeedParams(): ?TextAdGroupFeedParamsAdd
    {
        return $this->TextAdGroupFeedParams ?? null;
    }

    /**
     * Set TextAdGroupFeedParams
     *
     * @return $this
     */
    public function setTextAdGroupFeedParams(?TextAdGroupFeedParamsAdd $value)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }
}
