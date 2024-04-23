<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Campaigns extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/campaigns?wsdl';

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'StringConditionOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum',
            'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
            'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
            'VideoTargetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VideoTargetEnum',
            'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
            'ConditionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionTypeEnum',
            'AdTargetStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetStateSelectionEnum',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
            'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
            'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
            'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
            'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
            'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
            'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
            'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
            'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
            'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
            'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
            'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
            'LangEnum' => 'Biplane\YandexDirect\Api\V5\Contract\LangEnum',
            'RepresentativeRoleEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum',
            'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
            'ServingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum',
            'SerpLayoutEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
            'IncomeGradeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeEnum',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
            'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
            'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
            'AutotargetingCategoriesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesEnum',
            'AutotargetingCategory' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategory',
            'AutotargetingCategoryArray' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoryArray',
            'AutotargetingBrandOptionsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsEnum',
            'AutotargetingBrandOption' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOption',
            'AutotargetingBrandOptionArray' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionArray',
            'AutotargetingCategories' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategories',
            'AutotargetingBrandOptions' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptions',
            'AutotargetingSettings' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingSettings',
            'AutotargetingCategoriesFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingCategoriesFieldEnum',
            'AutotargetingBrandOptionsFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AutotargetingBrandOptionsFieldEnum',
            'SmsEventsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmsEventsEnum',
            'PlacementTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PlacementTypesEnum',
            'PlacementType' => 'Biplane\YandexDirect\Api\V5\Contract\PlacementType',
            'PlacementTypeArray' => 'Biplane\YandexDirect\Api\V5\Contract\PlacementTypeArray',
            'CampaignStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusSelectionEnum',
            'CampaignStateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStateEnum',
            'CampaignStateGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStateGetEnum',
            'CampaignStatusPaymentEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatusPaymentEnum',
            'RelevantKeywordsModeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsModeEnum',
            'DailyBudgetModeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudgetModeEnum',
            'CampaignFundsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsEnum',
            'CampaignTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignTypeEnum',
            'CampaignTypeGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignTypeGetEnum',
            'CampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFieldEnum',
            'TextCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignFieldEnum',
            'TextCampaignSearchStrategyPlacementTypesFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyPlacementTypesFieldEnum',
            'UnifiedCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignFieldEnum',
            'UnifiedCampaignSearchStrategyPlacementTypesFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyPlacementTypesFieldEnum',
            'MobileAppCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignFieldEnum',
            'DynamicTextCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignFieldEnum',
            'CpmBannerCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignFieldEnum',
            'SmartCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignFieldEnum',
            'TextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyTypeEnum',
            'UnifiedCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyTypeEnum',
            'TextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyTypeEnum',
            'UnifiedCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignNetworkStrategyTypeEnum',
            'MobileAppCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyTypeEnum',
            'MobileAppCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyTypeEnum',
            'DynamicTextCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyTypeEnum',
            'DynamicTextCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyTypeEnum',
            'CpmBannerCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategyTypeEnum',
            'CpmBannerCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyTypeEnum',
            'SmartCampaignSearchStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategyTypeEnum',
            'SmartCampaignNetworkStrategyTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategyTypeEnum',
            'TextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsEnum',
            'TextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingsGetEnum',
            'UnifiedCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSettingsEnum',
            'UnifiedCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSettingsGetEnum',
            'MobileAppCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsEnum',
            'MobileAppCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingsGetEnum',
            'DynamicTextCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsEnum',
            'DynamicTextCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingsGetEnum',
            'CpmBannerCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingsEnum',
            'CpmBannerCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingsGetEnum',
            'SmartCampaignSettingsEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSettingsEnum',
            'SmartCampaignSettingsGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSettingsGetEnum',
            'BudgetTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BudgetTypeEnum',
            'TextCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyPlacementTypes',
            'TextCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPlatforms',
            'UnifiedCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyPlacementTypes',
            'UnifiedCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPlatforms',
            'SmartCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPlatforms',
            'PackageBiddingStrategyGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\PackageBiddingStrategyGetBase',
            'PackageBiddingStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\PackageBiddingStrategyAddBase',
            'PackageBiddingStrategyUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\PackageBiddingStrategyUpdateBase',
            'TextCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPackageBiddingStrategyGet',
            'UnifiedCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyGet',
            'TextCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPackageBiddingStrategyAdd',
            'UnifiedCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyAdd',
            'TextCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPackageBiddingStrategyUpdate',
            'UnifiedCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyUpdate',
            'DynamicTextCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignPackageBiddingStrategyGet',
            'DynamicTextCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignPackageBiddingStrategyAdd',
            'DynamicTextCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignPackageBiddingStrategyUpdate',
            'SmartCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPackageBiddingStrategyGet',
            'SmartCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPackageBiddingStrategyAdd',
            'SmartCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPackageBiddingStrategyUpdate',
            'MobileAppCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignPackageBiddingStrategyGet',
            'StrategyWeeklyBudgetBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetBase',
            'StrategyMaximumClicks' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicks',
            'StrategyMaximumConversionRate' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRate',
            'StrategyMaximumAppInstalls' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstalls',
            'StrategyAverageCpc' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpc',
            'StrategyAverageCpa' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpa',
            'StrategyPayForConversion' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversion',
            'StrategyAverageCpi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpi',
            'StrategyPayForInstall' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForInstall',
            'StrategyAverageCpaPerCampaign' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaign',
            'StrategyPayForConversionPerCampaign' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaign',
            'StrategyPayForConversionPerFilter' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilter',
            'StrategyAverageCpaPerFilter' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilter',
            'StrategyAverageCpcPerCampaign' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaign',
            'StrategyAverageCpcPerFilter' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilter',
            'StrategyAverageRoi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoi',
            'StrategyAverageCrr' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrr',
            'StrategyPayForConversionCrr' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrr',
            'StrategyWeeklyClickPackage' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackage',
            'StrategyNetworkDefault' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefault',
            'StrategyMaximumImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumImpressionsBase',
            'StrategyWbMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbMaximumImpressions',
            'StrategyCpMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpMaximumImpressions',
            'StrategyAverageCpvBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpvBase',
            'StrategyWbAverageCpv' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbAverageCpv',
            'StrategyCpAverageCpv' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpAverageCpv',
            'StrategyDecreasedPriceForRepeatedImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyDecreasedPriceForRepeatedImpressionsBase',
            'StrategyWbDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbDecreasedPriceForRepeatedImpressions',
            'StrategyCpDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpDecreasedPriceForRepeatedImpressions',
            'TextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyBase',
            'TextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategy',
            'TextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategy',
            'UnifiedCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategyBase',
            'UnifiedCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignNetworkStrategy',
            'UnifiedCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategy',
            'MobileAppCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyBase',
            'MobileAppCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategy',
            'MobileAppCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategy',
            'DynamicTextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyBase',
            'DynamicTextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategy',
            'DynamicTextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategy',
            'CpmBannerCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategy',
            'CpmBannerCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategy',
            'SmartCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategyBase',
            'SmartCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategy',
            'SmartCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategy',
            'TextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategy',
            'UnifiedCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategy',
            'MobileAppCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategy',
            'DynamicTextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategy',
            'CpmBannerCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignStrategy',
            'SmartCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategy',
            'StrategyWeeklyBudgetAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetAddBase',
            'StrategyMaximumClicksAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksAdd',
            'StrategyMaximumConversionRateAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateAdd',
            'StrategyMaximumAppInstallsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstallsAdd',
            'StrategyAverageCpcAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcAdd',
            'StrategyAverageCpaAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaAdd',
            'StrategyPayForConversionAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionAdd',
            'StrategyAverageCpiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpiAdd',
            'StrategyPayForInstallAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForInstallAdd',
            'StrategyAverageCpaPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignAdd',
            'StrategyPayForConversionPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignAdd',
            'StrategyPayForConversionPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterAdd',
            'StrategyAverageCpaPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterAdd',
            'StrategyAverageCpcPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignAdd',
            'StrategyAverageCpcPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterAdd',
            'StrategyAverageRoiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoiAdd',
            'StrategyAverageCrrAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrAdd',
            'StrategyPayForConversionCrrAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrAdd',
            'StrategyWeeklyClickPackageAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackageAdd',
            'StrategyNetworkDefaultAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefaultAdd',
            'StrategyMaximumImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumImpressionsAddBase',
            'StrategyWbMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbMaximumImpressionsAdd',
            'StrategyCpMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpMaximumImpressionsAdd',
            'StrategyAverageCpvAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpvAddBase',
            'StrategyWbAverageCpvAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbAverageCpvAdd',
            'StrategyCpAverageCpvAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpAverageCpvAdd',
            'StrategyDecreasedPriceForRepeatedImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyDecreasedPriceForRepeatedImpressionsAddBase',
            'StrategyWbDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbDecreasedPriceForRepeatedImpressionsAdd',
            'StrategyCpDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpDecreasedPriceForRepeatedImpressionsAdd',
            'TextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAddBase',
            'TextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyAdd',
            'TextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyAdd',
            'UnifiedCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategyAddBase',
            'UnifiedCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignNetworkStrategyAdd',
            'UnifiedCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyAdd',
            'MobileAppCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAddBase',
            'MobileAppCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyAdd',
            'MobileAppCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyAdd',
            'DynamicTextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAddBase',
            'DynamicTextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyAdd',
            'DynamicTextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyAdd',
            'CpmBannerCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategyAdd',
            'CpmBannerCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyAdd',
            'SmartCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategyAddBase',
            'SmartCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategyAdd',
            'SmartCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategyAdd',
            'TextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAdd',
            'UnifiedCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategyAdd',
            'MobileAppCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAdd',
            'DynamicTextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAdd',
            'CpmBannerCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignStrategyAdd',
            'SmartCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategyAdd',
            'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignNotification',
            'SmsSettings' => 'Biplane\YandexDirect\Api\V5\Contract\SmsSettings',
            'EmailSettings' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSettings',
            'TimeTargetingOnPublicHolidays' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingOnPublicHolidays',
            'RelevantKeywordsSettingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSettingAdd',
            'RelevantKeywordsSetting' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSetting',
            'PriorityGoalsItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsItem',
            'PriorityGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsUpdateItem',
            'PriorityGoalsArray' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsArray',
            'PriorityGoalsUpdateSetting' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsUpdateSetting',
            'FrequencyCapSetting' => 'Biplane\YandexDirect\Api\V5\Contract\FrequencyCapSetting',
            'DailyBudget' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudget',
            'CustomPeriodBudget' => 'Biplane\YandexDirect\Api\V5\Contract\CustomPeriodBudget',
            'ExplorationBudget' => 'Biplane\YandexDirect\Api\V5\Contract\ExplorationBudget',
            'TextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSetting',
            'TextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingGet',
            'UnifiedCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSetting',
            'UnifiedCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSettingGet',
            'MobileAppCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSetting',
            'MobileAppCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingGet',
            'DynamicTextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSetting',
            'DynamicTextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingGet',
            'CpmBannerCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSetting',
            'CpmBannerCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingGet',
            'SmartCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSetting',
            'SmartCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSettingGet',
            'CampaignFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsParam',
            'SharedAccountFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\SharedAccountFundsParam',
            'FundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\FundsParam',
            'CampaignAssistant' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAssistant',
            'TimeTargetingBase' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingBase',
            'TimeTargeting' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargeting',
            'TimeTargetingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingAdd',
            'CampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignBase',
            'TextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignBase',
            'UnifiedCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignBase',
            'DynamicTextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignBase',
            'CpmBannerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignBase',
            'SmartCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignBase',
            'TextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem',
            'UnifiedCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignAddItem',
            'MobileAppCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignAddItem',
            'DynamicTextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignAddItem',
            'CpmBannerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignAddItem',
            'SmartCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignAddItem',
            'CampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem',
            'TextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignUpdateItem',
            'UnifiedCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignUpdateItem',
            'MobileAppCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignUpdateItem',
            'DynamicTextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignUpdateItem',
            'CpmBannerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignUpdateItem',
            'SmartCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignUpdateItem',
            'CampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem',
            'TextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignGetItem',
            'UnifiedCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignGetItem',
            'MobileAppCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignGetItem',
            'DynamicTextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignGetItem',
            'CpmBannerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignGetItem',
            'SmartCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignGetItem',
            'CampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem',
            'CampaignsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsResponse',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsResponse',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsRequest',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveCampaignsResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveCampaignsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendCampaignsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeCampaignsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddCampaignsRequest $parameters): AddCampaignsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function update(UpdateCampaignsRequest $parameters): UpdateCampaignsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    public function get(GetCampaignsRequest $parameters): GetCampaignsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function delete(DeleteCampaignsRequest $parameters): DeleteCampaignsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    public function archive(ArchiveCampaignsRequest $parameters): ArchiveCampaignsResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    public function unarchive(UnarchiveCampaignsRequest $parameters): UnarchiveCampaignsResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }

    public function suspend(SuspendCampaignsRequest $parameters): SuspendCampaignsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    public function resume(ResumeCampaignsRequest $parameters): ResumeCampaignsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }
}
