<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGroupGetItem extends AdGroupBase
{
//    Can be omitted.
//    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $CampaignId;

//    Can be omitted.
//    protected $Status;

//    Can be omitted.
//    protected $Type;

//    Can be omitted.
//    protected $Subtype;

//    Can be omitted.
//    protected $MobileAppAdGroup;

//    Can be omitted.
//    protected $DynamicTextAdGroup;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroup;

//    Can be omitted.
//    protected $SmartAdGroup;

//    Can be omitted.
//    protected $ServingStatus;

//    Can be omitted.
//    protected $RestrictedRegionIds;

//    Can be omitted.
//    protected $TextAdGroupFeedParams;

//    Can be omitted.
//    protected $UnifiedAdGroup;

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
     * Get Id
     */
    public function getId(): ?int
    {
        return $this->Id ?? null;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(?int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get CampaignId
     */
    public function getCampaignId(): ?int
    {
        return $this->CampaignId ?? null;
    }

    /**
     * Set CampaignId
     *
     * @return $this
     */
    public function setCampaignId(?int $value)
    {
        $this->CampaignId = $value;

        return $this;
    }

    /**
     * Get Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @return 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null
     */
    public function getStatus(): ?string
    {
        return $this->Status ?? null;
    }

    /**
     * Set Status
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\StatusEnum
     *
     * @param 'ACCEPTED'|'DRAFT'|'MODERATION'|'PREACCEPTED'|'REJECTED'|'UNKNOWN'|null $value
     *
     * @return $this
     */
    public function setStatus(?string $value)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Get Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum
     *
     * @return 'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'|null
     */
    public function getType(): ?string
    {
        return $this->Type ?? null;
    }

    /**
     * Set Type
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum
     *
     * @param 'DYNAMIC_TEXT_AD_GROUP'|'MOBILE_APP_AD_GROUP'|'TEXT_AD_GROUP'|'CPM_BANNER_AD_GROUP'|'CPM_VIDEO_AD_GROUP'|'UNIFIED_AD_GROUP'|null $value
     *
     * @return $this
     */
    public function setType(?string $value)
    {
        $this->Type = $value;

        return $this;
    }

    /**
     * Get Subtype
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupSubtypeEnum
     *
     * @return 'WEBPAGE'|'FEED'|'NONE'|'KEYWORDS'|'USER_PROFILE'|null
     */
    public function getSubtype(): ?string
    {
        return $this->Subtype ?? null;
    }

    /**
     * Set Subtype
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupSubtypeEnum
     *
     * @param 'WEBPAGE'|'FEED'|'NONE'|'KEYWORDS'|'USER_PROFILE'|null $value
     *
     * @return $this
     */
    public function setSubtype(?string $value)
    {
        $this->Subtype = $value;

        return $this;
    }

    /**
     * Get MobileAppAdGroup
     */
    public function getMobileAppAdGroup(): ?MobileAppAdGroupGet
    {
        return $this->MobileAppAdGroup ?? null;
    }

    /**
     * Set MobileAppAdGroup
     *
     * @return $this
     */
    public function setMobileAppAdGroup(?MobileAppAdGroupGet $value)
    {
        $this->MobileAppAdGroup = $value;

        return $this;
    }

    /**
     * Get DynamicTextAdGroup
     */
    public function getDynamicTextAdGroup(): ?DynamicTextAdGroupGet
    {
        return $this->DynamicTextAdGroup ?? null;
    }

    /**
     * Set DynamicTextAdGroup
     *
     * @return $this
     */
    public function setDynamicTextAdGroup(?DynamicTextAdGroupGet $value)
    {
        $this->DynamicTextAdGroup = $value;

        return $this;
    }

    /**
     * Get DynamicTextFeedAdGroup
     */
    public function getDynamicTextFeedAdGroup(): ?DynamicTextFeedAdGroupGet
    {
        return $this->DynamicTextFeedAdGroup ?? null;
    }

    /**
     * Set DynamicTextFeedAdGroup
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroup(?DynamicTextFeedAdGroupGet $value)
    {
        $this->DynamicTextFeedAdGroup = $value;

        return $this;
    }

    /**
     * Get SmartAdGroup
     */
    public function getSmartAdGroup(): ?SmartAdGroupGet
    {
        return $this->SmartAdGroup ?? null;
    }

    /**
     * Set SmartAdGroup
     *
     * @return $this
     */
    public function setSmartAdGroup(?SmartAdGroupGet $value)
    {
        $this->SmartAdGroup = $value;

        return $this;
    }

    /**
     * Get ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @return 'ELIGIBLE'|'RARELY_SERVED'|null
     */
    public function getServingStatus(): ?string
    {
        return $this->ServingStatus ?? null;
    }

    /**
     * Set ServingStatus
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum
     *
     * @param 'ELIGIBLE'|'RARELY_SERVED'|null $value
     *
     * @return $this
     */
    public function setServingStatus(?string $value)
    {
        $this->ServingStatus = $value;

        return $this;
    }

    /**
     * Get RestrictedRegionIds
     *
     * @return non-empty-list<int>|null
     */
    public function getRestrictedRegionIds(): ?array
    {
        return $this->RestrictedRegionIds ?? null;
    }

    /**
     * Set RestrictedRegionIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setRestrictedRegionIds(?array $value)
    {
        $this->RestrictedRegionIds = $value;

        return $this;
    }

    /**
     * Get TextAdGroupFeedParams
     */
    public function getTextAdGroupFeedParams(): ?TextAdGroupFeedParamsGet
    {
        return $this->TextAdGroupFeedParams ?? null;
    }

    /**
     * Set TextAdGroupFeedParams
     *
     * @return $this
     */
    public function setTextAdGroupFeedParams(?TextAdGroupFeedParamsGet $value)
    {
        $this->TextAdGroupFeedParams = $value;

        return $this;
    }

    /**
     * Get UnifiedAdGroup
     */
    public function getUnifiedAdGroup(): ?UnifiedAdGroupGet
    {
        return $this->UnifiedAdGroup ?? null;
    }

    /**
     * Set UnifiedAdGroup
     *
     * @return $this
     */
    public function setUnifiedAdGroup(?UnifiedAdGroupGet $value)
    {
        $this->UnifiedAdGroup = $value;

        return $this;
    }
}
