<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetCampaignsRequest extends GetRequestGeneral
{
//    Can be omitted.
//    protected $SelectionCriteria;

    /** @var non-empty-list<'BlockedIps'|'ExcludedSites'|'Currency'|'DailyBudget'|'Notification'|'EndDate'|'Funds'|'ClientInfo'|'Id'|'Name'|'NegativeKeywords'|'RepresentedBy'|'StartDate'|'Statistics'|'State'|'Status'|'StatusPayment'|'StatusClarification'|'SourceId'|'TimeTargeting'|'TimeZone'|'Type'> */
    protected $FieldNames;

//    Can be omitted.
//    protected $TextCampaignFieldNames;

//    Can be omitted.
//    protected $TextCampaignSearchStrategyPlacementTypesFieldNames;

//    Can be omitted.
//    protected $MobileAppCampaignFieldNames;

//    Can be omitted.
//    protected $DynamicTextCampaignFieldNames;

//    Can be omitted.
//    protected $DynamicTextCampaignSearchStrategyPlacementTypesFieldNames;

//    Can be omitted.
//    protected $CpmBannerCampaignFieldNames;

//    Can be omitted.
//    protected $SmartCampaignFieldNames;

//    Can be omitted.
//    protected $UnifiedCampaignFieldNames;

//    Can be omitted.
//    protected $UnifiedCampaignSearchStrategyPlacementTypesFieldNames;

//    Can be omitted.
//    protected $UnifiedCampaignPackageBiddingStrategyPlatformsFieldNames;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get SelectionCriteria
     */
    public function getSelectionCriteria(): ?CampaignsSelectionCriteria
    {
        return $this->SelectionCriteria ?? null;
    }

    /**
     * Set SelectionCriteria
     *
     * @return $this
     */
    public function setSelectionCriteria(?CampaignsSelectionCriteria $value)
    {
        $this->SelectionCriteria = $value;

        return $this;
    }

    /**
     * Get FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum
     *
     * @return non-empty-list<'BlockedIps'|'ExcludedSites'|'Currency'|'DailyBudget'|'Notification'|'EndDate'|'Funds'|'ClientInfo'|'Id'|'Name'|'NegativeKeywords'|'RepresentedBy'|'StartDate'|'Statistics'|'State'|'Status'|'StatusPayment'|'StatusClarification'|'SourceId'|'TimeTargeting'|'TimeZone'|'Type'>
     */
    public function getFieldNames(): array
    {
        return $this->FieldNames;
    }

    /**
     * Set FieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum
     *
     * @param non-empty-list<'BlockedIps'|'ExcludedSites'|'Currency'|'DailyBudget'|'Notification'|'EndDate'|'Funds'|'ClientInfo'|'Id'|'Name'|'NegativeKeywords'|'RepresentedBy'|'StartDate'|'Statistics'|'State'|'Status'|'StatusPayment'|'StatusClarification'|'SourceId'|'TimeTargeting'|'TimeZone'|'Type'> $value
     *
     * @return $this
     */
    public function setFieldNames(array $value)
    {
        $this->FieldNames = $value;

        return $this;
    }

    /**
     * Get TextCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum
     *
     * @return list<'CounterIds'|'RelevantKeywords'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'>
     */
    public function getTextCampaignFieldNames(): array
    {
        return $this->TextCampaignFieldNames ?? [];
    }

    /**
     * Set TextCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum
     *
     * @param list<'CounterIds'|'RelevantKeywords'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'> $value
     *
     * @return $this
     */
    public function setTextCampaignFieldNames(array $value)
    {
        $this->TextCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get TextCampaignSearchStrategyPlacementTypesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyPlacementTypesFieldEnum
     *
     * @return list<'SearchResults'|'ProductGallery'|'DynamicPlaces'>
     */
    public function getTextCampaignSearchStrategyPlacementTypesFieldNames(): array
    {
        return $this->TextCampaignSearchStrategyPlacementTypesFieldNames ?? [];
    }

    /**
     * Set TextCampaignSearchStrategyPlacementTypesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyPlacementTypesFieldEnum
     *
     * @param list<'SearchResults'|'ProductGallery'|'DynamicPlaces'> $value
     *
     * @return $this
     */
    public function setTextCampaignSearchStrategyPlacementTypesFieldNames(array $value)
    {
        $this->TextCampaignSearchStrategyPlacementTypesFieldNames = $value;

        return $this;
    }

    /**
     * Get MobileAppCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignFieldEnum
     *
     * @return list<'Settings'|'BiddingStrategy'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'>
     */
    public function getMobileAppCampaignFieldNames(): array
    {
        return $this->MobileAppCampaignFieldNames ?? [];
    }

    /**
     * Set MobileAppCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignFieldEnum
     *
     * @param list<'Settings'|'BiddingStrategy'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'> $value
     *
     * @return $this
     */
    public function setMobileAppCampaignFieldNames(array $value)
    {
        $this->MobileAppCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get DynamicTextCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignFieldEnum
     *
     * @return list<'PlacementTypes'|'CounterIds'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'>
     */
    public function getDynamicTextCampaignFieldNames(): array
    {
        return $this->DynamicTextCampaignFieldNames ?? [];
    }

    /**
     * Set DynamicTextCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignFieldEnum
     *
     * @param list<'PlacementTypes'|'CounterIds'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'> $value
     *
     * @return $this
     */
    public function setDynamicTextCampaignFieldNames(array $value)
    {
        $this->DynamicTextCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get DynamicTextCampaignSearchStrategyPlacementTypesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyPlacementTypesFieldEnum
     *
     * @return list<'SearchResults'|'ProductGallery'|'DynamicPlaces'>
     */
    public function getDynamicTextCampaignSearchStrategyPlacementTypesFieldNames(): array
    {
        return $this->DynamicTextCampaignSearchStrategyPlacementTypesFieldNames ?? [];
    }

    /**
     * Set DynamicTextCampaignSearchStrategyPlacementTypesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyPlacementTypesFieldEnum
     *
     * @param list<'SearchResults'|'ProductGallery'|'DynamicPlaces'> $value
     *
     * @return $this
     */
    public function setDynamicTextCampaignSearchStrategyPlacementTypesFieldNames(array $value)
    {
        $this->DynamicTextCampaignSearchStrategyPlacementTypesFieldNames = $value;

        return $this;
    }

    /**
     * Get CpmBannerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignFieldEnum
     *
     * @return list<'CounterIds'|'FrequencyCap'|'VideoTarget'|'Settings'|'BiddingStrategy'>
     */
    public function getCpmBannerCampaignFieldNames(): array
    {
        return $this->CpmBannerCampaignFieldNames ?? [];
    }

    /**
     * Set CpmBannerCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignFieldEnum
     *
     * @param list<'CounterIds'|'FrequencyCap'|'VideoTarget'|'Settings'|'BiddingStrategy'> $value
     *
     * @return $this
     */
    public function setCpmBannerCampaignFieldNames(array $value)
    {
        $this->CpmBannerCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get SmartCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignFieldEnum
     *
     * @return list<'CounterId'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'>
     */
    public function getSmartCampaignFieldNames(): array
    {
        return $this->SmartCampaignFieldNames ?? [];
    }

    /**
     * Set SmartCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmartCampaignFieldEnum
     *
     * @param list<'CounterId'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'> $value
     *
     * @return $this
     */
    public function setSmartCampaignFieldNames(array $value)
    {
        $this->SmartCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get UnifiedCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignFieldEnum
     *
     * @return list<'CounterIds'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'>
     */
    public function getUnifiedCampaignFieldNames(): array
    {
        return $this->UnifiedCampaignFieldNames ?? [];
    }

    /**
     * Set UnifiedCampaignFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignFieldEnum
     *
     * @param list<'CounterIds'|'Settings'|'BiddingStrategy'|'PriorityGoals'|'TrackingParams'|'AttributionModel'|'PackageBiddingStrategy'|'CanBeUsedAsPackageBiddingStrategySource'|'NegativeKeywordSharedSetIds'> $value
     *
     * @return $this
     */
    public function setUnifiedCampaignFieldNames(array $value)
    {
        $this->UnifiedCampaignFieldNames = $value;

        return $this;
    }

    /**
     * Get UnifiedCampaignSearchStrategyPlacementTypesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyPlacementTypesFieldEnum
     *
     * @return list<'SearchResults'|'ProductGallery'|'DynamicPlaces'|'Maps'|'SearchOrganizationList'>
     */
    public function getUnifiedCampaignSearchStrategyPlacementTypesFieldNames(): array
    {
        return $this->UnifiedCampaignSearchStrategyPlacementTypesFieldNames ?? [];
    }

    /**
     * Set UnifiedCampaignSearchStrategyPlacementTypesFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyPlacementTypesFieldEnum
     *
     * @param list<'SearchResults'|'ProductGallery'|'DynamicPlaces'|'Maps'|'SearchOrganizationList'> $value
     *
     * @return $this
     */
    public function setUnifiedCampaignSearchStrategyPlacementTypesFieldNames(array $value)
    {
        $this->UnifiedCampaignSearchStrategyPlacementTypesFieldNames = $value;

        return $this;
    }

    /**
     * Get UnifiedCampaignPackageBiddingStrategyPlatformsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyPlatformsFieldEnum
     *
     * @return list<'SearchResult'|'ProductGallery'|'Maps'|'SearchOrganizationList'|'Network'|'DynamicPlaces'>
     */
    public function getUnifiedCampaignPackageBiddingStrategyPlatformsFieldNames(): array
    {
        return $this->UnifiedCampaignPackageBiddingStrategyPlatformsFieldNames ?? [];
    }

    /**
     * Set UnifiedCampaignPackageBiddingStrategyPlatformsFieldNames
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyPlatformsFieldEnum
     *
     * @param list<'SearchResult'|'ProductGallery'|'Maps'|'SearchOrganizationList'|'Network'|'DynamicPlaces'> $value
     *
     * @return $this
     */
    public function setUnifiedCampaignPackageBiddingStrategyPlatformsFieldNames(array $value)
    {
        $this->UnifiedCampaignPackageBiddingStrategyPlatformsFieldNames = $value;

        return $this;
    }
}
