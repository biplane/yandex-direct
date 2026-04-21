<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetAdGroupsRequest extends GetRequestGeneral
{
    /** @var AdGroupsSelectionCriteria */
    protected $SelectionCriteria;

    /** @var non-empty-list<'Id'|'CampaignId'|'Status'|'Name'|'RegionIds'|'RestrictedRegionIds'|'NegativeKeywords'|'NegativeKeywordSharedSetIds'|'Type'|'TrackingParams'|'Subtype'|'ServingStatus'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $MobileAppAdGroupFieldNames;

//    Can be omitted.
//    protected $DynamicTextAdGroupFieldNames;

//    Can be omitted.
//    protected $DynamicTextFeedAdGroupFieldNames;

//    Can be omitted.
//    protected $AutotargetingSettingsCategoriesFieldNames;

//    Can be omitted.
//    protected $AutotargetingSettingsBrandOptionsFieldNames;

//    Can be omitted.
//    protected $SmartAdGroupFieldNames;

//    Can be omitted.
//    protected $TextAdGroupFeedParamsFieldNames;

//    Can be omitted.
//    protected $UnifiedAdGroupFieldNames;

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
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): AdGroupsSelectionCriteria
    {
        return $this->SelectionCriteria;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(AdGroupsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupFieldEnum
     *
     * @return non-empty-list<'Id'|'CampaignId'|'Status'|'Name'|'RegionIds'|'RestrictedRegionIds'|'NegativeKeywords'|'NegativeKeywordSharedSetIds'|'Type'|'TrackingParams'|'Subtype'|'ServingStatus'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AdGroupFieldEnum
     *
     * @param non-empty-list<'Id'|'CampaignId'|'Status'|'Name'|'RegionIds'|'RestrictedRegionIds'|'NegativeKeywords'|'NegativeKeywordSharedSetIds'|'Type'|'TrackingParams'|'Subtype'|'ServingStatus'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get MobileAppAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupFieldEnum
     *
     * @return list<'StoreUrl'|'TargetDeviceType'|'TargetCarrier'|'TargetOperatingSystemVersion'|'AppIconModeration'|'AppAvailabilityStatus'|'AppOperatingSystemType'>
     */
    public function getMobileAppAdGroupFieldNames(): array
    {
        return $this->MobileAppAdGroupFieldNames ?? [];
    }

    /**
     * Set MobileAppAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGroupFieldEnum
     *
     * @param list<'StoreUrl'|'TargetDeviceType'|'TargetCarrier'|'TargetOperatingSystemVersion'|'AppIconModeration'|'AppAvailabilityStatus'|'AppOperatingSystemType'> $value
     *
     * @return $this
     */
    public function setMobileAppAdGroupFieldNames(array $value)
    {
        $this->MobileAppAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Get DynamicTextAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroupFieldEnum
     *
     * @return list<'AutotargetingCategories'|'AutotargetingSettings'|'DomainUrl'|'DomainUrlProcessingStatus'>
     */
    public function getDynamicTextAdGroupFieldNames(): array
    {
        return $this->DynamicTextAdGroupFieldNames ?? [];
    }

    /**
     * Set DynamicTextAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGroupFieldEnum
     *
     * @param list<'AutotargetingCategories'|'AutotargetingSettings'|'DomainUrl'|'DomainUrlProcessingStatus'> $value
     *
     * @return $this
     */
    public function setDynamicTextAdGroupFieldNames(array $value)
    {
        $this->DynamicTextAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Get DynamicTextFeedAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextFeedAdGroupFieldEnum
     *
     * @return list<'AutotargetingCategories'|'AutotargetingSettings'|'Source'|'FeedId'|'SourceType'|'SourceProcessingStatus'>
     */
    public function getDynamicTextFeedAdGroupFieldNames(): array
    {
        return $this->DynamicTextFeedAdGroupFieldNames ?? [];
    }

    /**
     * Set DynamicTextFeedAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextFeedAdGroupFieldEnum
     *
     * @param list<'AutotargetingCategories'|'AutotargetingSettings'|'Source'|'FeedId'|'SourceType'|'SourceProcessingStatus'> $value
     *
     * @return $this
     */
    public function setDynamicTextFeedAdGroupFieldNames(array $value)
    {
        $this->DynamicTextFeedAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettingsCategoriesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesFieldEnum
     *
     * @return list<'Exact'|'Narrow'|'Alternative'|'Accessory'|'Broader'>
     */
    public function getAutotargetingSettingsCategoriesFieldNames(): array
    {
        return $this->AutotargetingSettingsCategoriesFieldNames ?? [];
    }

    /**
     * Set AutotargetingSettingsCategoriesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesFieldEnum
     *
     * @param list<'Exact'|'Narrow'|'Alternative'|'Accessory'|'Broader'> $value
     *
     * @return $this
     */
    public function setAutotargetingSettingsCategoriesFieldNames(array $value)
    {
        $this->AutotargetingSettingsCategoriesFieldNames = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettingsBrandOptionsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsFieldEnum
     *
     * @return list<'WithoutBrands'|'WithAdvertiserBrand'|'WithCompetitorsBrand'>
     */
    public function getAutotargetingSettingsBrandOptionsFieldNames(): array
    {
        return $this->AutotargetingSettingsBrandOptionsFieldNames ?? [];
    }

    /**
     * Set AutotargetingSettingsBrandOptionsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsFieldEnum
     *
     * @param list<'WithoutBrands'|'WithAdvertiserBrand'|'WithCompetitorsBrand'> $value
     *
     * @return $this
     */
    public function setAutotargetingSettingsBrandOptionsFieldNames(array $value)
    {
        $this->AutotargetingSettingsBrandOptionsFieldNames = $value;

        return $this;
    }

    /**
     * Get SmartAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartAdGroupFieldEnum
     *
     * @return list<'FeedId'|'AdTitleSource'|'AdBodySource'>
     */
    public function getSmartAdGroupFieldNames(): array
    {
        return $this->SmartAdGroupFieldNames ?? [];
    }

    /**
     * Set SmartAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartAdGroupFieldEnum
     *
     * @param list<'FeedId'|'AdTitleSource'|'AdBodySource'> $value
     *
     * @return $this
     */
    public function setSmartAdGroupFieldNames(array $value)
    {
        $this->SmartAdGroupFieldNames = $value;

        return $this;
    }

    /**
     * Get TextAdGroupFeedParamsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextAdGroupFeedParamsFieldEnum
     *
     * @return list<'FeedId'|'FeedCategoryIds'>
     */
    public function getTextAdGroupFeedParamsFieldNames(): array
    {
        return $this->TextAdGroupFeedParamsFieldNames ?? [];
    }

    /**
     * Set TextAdGroupFeedParamsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextAdGroupFeedParamsFieldEnum
     *
     * @param list<'FeedId'|'FeedCategoryIds'> $value
     *
     * @return $this
     */
    public function setTextAdGroupFeedParamsFieldNames(array $value)
    {
        $this->TextAdGroupFeedParamsFieldNames = $value;

        return $this;
    }

    /**
     * Get UnifiedAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedAdGroupFieldEnum
     *
     * @return list<'OfferRetargeting'>
     */
    public function getUnifiedAdGroupFieldNames(): array
    {
        return $this->UnifiedAdGroupFieldNames ?? [];
    }

    /**
     * Set UnifiedAdGroupFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedAdGroupFieldEnum
     *
     * @param list<'OfferRetargeting'> $value
     *
     * @return $this
     */
    public function setUnifiedAdGroupFieldNames(array $value)
    {
        $this->UnifiedAdGroupFieldNames = $value;

        return $this;
    }
}
