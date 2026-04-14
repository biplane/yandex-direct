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
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/campaigns?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsRequest',
            'CampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAddItem',
            'DailyBudget' => 'Biplane\YandexDirect\Api\V5\Contract\DailyBudget',
            'TextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignAddItem',
            'TextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAdd',
            'TextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyAdd',
            'TextCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategyPlacementTypes',
            'TextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyAddBase',
            'StrategyMaximumClicksAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksAdd',
            'CustomPeriodBudget' => 'Biplane\YandexDirect\Api\V5\Contract\CustomPeriodBudget',
            'StrategyWeeklyBudgetAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetAddBase',
            'StrategyMaximumConversionRateAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateAdd',
            'StrategyAverageCpcAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcAdd',
            'StrategyAverageCpaAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaAdd',
            'ExplorationBudget' => 'Biplane\YandexDirect\Api\V5\Contract\ExplorationBudget',
            'StrategyPayForConversionAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionAdd',
            'StrategyWeeklyClickPackageAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackageAdd',
            'StrategyAverageRoiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoiAdd',
            'StrategyAverageCrrAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrAdd',
            'StrategyPayForConversionCrrAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrAdd',
            'StrategyAverageCpaMultipleGoalsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaMultipleGoalsAdd',
            'StrategyPayForConversionMultipleGoalsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionMultipleGoalsAdd',
            'StrategyMaxProfitAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaxProfitAdd',
            'TextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategyAdd',
            'StrategyNetworkDefaultAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefaultAdd',
            'TextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSetting',
            'RelevantKeywordsSettingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSettingAdd',
            'PriorityGoalsArray' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsArray',
            'PriorityGoalsItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsItem',
            'TextCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPackageBiddingStrategyAdd',
            'TextCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPlatforms',
            'PackageBiddingStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\PackageBiddingStrategyAddBase',
            'UnifiedCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignAddItem',
            'UnifiedCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategyAdd',
            'UnifiedCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyAdd',
            'UnifiedCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategyPlacementTypes',
            'UnifiedCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategyAddBase',
            'UnifiedCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignNetworkStrategyAdd',
            'UnifiedCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSetting',
            'UnifiedCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyAdd',
            'UnifiedCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPlatforms',
            'MobileAppCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignAddItem',
            'MobileAppCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAdd',
            'MobileAppCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategyAdd',
            'MobileAppCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyAddBase',
            'StrategyMaximumAppInstallsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstallsAdd',
            'StrategyAverageCpiAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpiAdd',
            'StrategyPayForInstallAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForInstallAdd',
            'MobileAppCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategyAdd',
            'MobileAppCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSetting',
            'DynamicTextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignAddItem',
            'DynamicTextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAdd',
            'DynamicTextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyAdd',
            'DynamicTextCampaignSearchStrategyPlacementTypesAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyPlacementTypesAdd',
            'DynamicTextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyAddBase',
            'DynamicTextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategyAdd',
            'DynamicTextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSetting',
            'PlacementType' => 'Biplane\YandexDirect\Api\V5\Contract\PlacementType',
            'DynamicTextCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignPackageBiddingStrategyAdd',
            'CpmBannerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignAddItem',
            'CpmBannerCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignStrategyAdd',
            'CpmBannerCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategyAdd',
            'CpmBannerCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategyAdd',
            'StrategyWbMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbMaximumImpressionsAdd',
            'StrategyMaximumImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumImpressionsAddBase',
            'StrategyCpMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpMaximumImpressionsAdd',
            'StrategyWbDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbDecreasedPriceForRepeatedImpressionsAdd',
            'StrategyDecreasedPriceForRepeatedImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyDecreasedPriceForRepeatedImpressionsAddBase',
            'StrategyCpDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpDecreasedPriceForRepeatedImpressionsAdd',
            'StrategyWbAverageCpvAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbAverageCpvAdd',
            'StrategyAverageCpvAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpvAddBase',
            'StrategyCpAverageCpvAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpAverageCpvAdd',
            'CpmBannerCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSetting',
            'FrequencyCapSetting' => 'Biplane\YandexDirect\Api\V5\Contract\FrequencyCapSetting',
            'SmartCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignAddItem',
            'SmartCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategyAdd',
            'SmartCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategyAdd',
            'SmartCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategyAddBase',
            'StrategyAverageCpcPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignAdd',
            'StrategyAverageCpcPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterAdd',
            'StrategyAverageCpaPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignAdd',
            'StrategyPayForConversionPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignAdd',
            'StrategyPayForConversionPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterAdd',
            'StrategyAverageCpaPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterAdd',
            'SmartCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategyAdd',
            'SmartCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSetting',
            'SmartCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPackageBiddingStrategyAdd',
            'SmartCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPlatforms',
            'TimeTargetingAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingAdd',
            'TimeTargetingOnPublicHolidays' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingOnPublicHolidays',
            'TimeTargetingBase' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargetingBase',
            'CampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignBase',
            'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignNotification',
            'SmsSettings' => 'Biplane\YandexDirect\Api\V5\Contract\SmsSettings',
            'EmailSettings' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSettings',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddCampaignsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsRequest',
            'CampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignUpdateItem',
            'TextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignUpdateItem',
            'TextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategy',
            'TextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSearchStrategy',
            'TextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignStrategyBase',
            'StrategyMaximumClicks' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicks',
            'StrategyWeeklyBudgetBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyBudgetBase',
            'StrategyMaximumConversionRate' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRate',
            'StrategyAverageCpc' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpc',
            'StrategyAverageCpa' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpa',
            'StrategyPayForConversion' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversion',
            'StrategyWeeklyClickPackage' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWeeklyClickPackage',
            'StrategyAverageRoi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageRoi',
            'StrategyAverageCrr' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrr',
            'StrategyPayForConversionCrr' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrr',
            'StrategyAverageCpaMultipleGoals' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaMultipleGoals',
            'StrategyPayForConversionMultipleGoals' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionMultipleGoals',
            'StrategyMaxProfit' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaxProfit',
            'TextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignNetworkStrategy',
            'StrategyNetworkDefault' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyNetworkDefault',
            'PriorityGoalsUpdateSetting' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsUpdateSetting',
            'PriorityGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsUpdateItem',
            'TextCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPackageBiddingStrategyUpdate',
            'PackageBiddingStrategyUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\PackageBiddingStrategyUpdateBase',
            'TextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignBase',
            'RelevantKeywordsSetting' => 'Biplane\YandexDirect\Api\V5\Contract\RelevantKeywordsSetting',
            'UnifiedCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignUpdateItem',
            'UnifiedCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategy',
            'UnifiedCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSearchStrategy',
            'UnifiedCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignStrategyBase',
            'UnifiedCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignNetworkStrategy',
            'UnifiedCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyUpdate',
            'UnifiedCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignBase',
            'MobileAppCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignUpdateItem',
            'MobileAppCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategy',
            'MobileAppCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSearchStrategy',
            'MobileAppCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignStrategyBase',
            'StrategyMaximumAppInstalls' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumAppInstalls',
            'StrategyAverageCpi' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpi',
            'StrategyPayForInstall' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForInstall',
            'MobileAppCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignNetworkStrategy',
            'DynamicTextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignUpdateItem',
            'DynamicTextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategy',
            'DynamicTextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategy',
            'DynamicTextCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSearchStrategyPlacementTypes',
            'DynamicTextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignStrategyBase',
            'DynamicTextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignNetworkStrategy',
            'DynamicTextCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignPackageBiddingStrategyUpdate',
            'DynamicTextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignBase',
            'CpmBannerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignUpdateItem',
            'CpmBannerCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignStrategy',
            'CpmBannerCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSearchStrategy',
            'CpmBannerCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignNetworkStrategy',
            'StrategyWbMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbMaximumImpressions',
            'StrategyMaximumImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumImpressionsBase',
            'StrategyCpMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpMaximumImpressions',
            'StrategyWbDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbDecreasedPriceForRepeatedImpressions',
            'StrategyDecreasedPriceForRepeatedImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyDecreasedPriceForRepeatedImpressionsBase',
            'StrategyCpDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpDecreasedPriceForRepeatedImpressions',
            'StrategyWbAverageCpv' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyWbAverageCpv',
            'StrategyAverageCpvBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpvBase',
            'StrategyCpAverageCpv' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyCpAverageCpv',
            'CpmBannerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignBase',
            'SmartCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignUpdateItem',
            'SmartCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategy',
            'SmartCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSearchStrategy',
            'SmartCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignStrategyBase',
            'StrategyAverageCpcPerCampaign' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaign',
            'StrategyAverageCpcPerFilter' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilter',
            'StrategyAverageCpaPerCampaign' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaign',
            'StrategyPayForConversionPerCampaign' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaign',
            'StrategyPayForConversionPerFilter' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilter',
            'StrategyAverageCpaPerFilter' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilter',
            'SmartCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignNetworkStrategy',
            'SmartCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPackageBiddingStrategyUpdate',
            'SmartCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignBase',
            'TimeTargeting' => 'Biplane\YandexDirect\Api\V5\Contract\TimeTargeting',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateCampaignsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsRequest',
            'CampaignsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetCampaignsResponse',
            'CampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignGetItem',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
            'FundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\FundsParam',
            'CampaignFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignFundsParam',
            'SharedAccountFundsParam' => 'Biplane\YandexDirect\Api\V5\Contract\SharedAccountFundsParam',
            'CampaignAssistant' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignAssistant',
            'TextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignGetItem',
            'TextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignSettingGet',
            'TextCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextCampaignPackageBiddingStrategyGet',
            'PackageBiddingStrategyGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\PackageBiddingStrategyGetBase',
            'UnifiedCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignGetItem',
            'UnifiedCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignSettingGet',
            'UnifiedCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\UnifiedCampaignPackageBiddingStrategyGet',
            'MobileAppCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignGetItem',
            'MobileAppCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignSettingGet',
            'MobileAppCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppCampaignPackageBiddingStrategyGet',
            'DynamicTextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignGetItem',
            'DynamicTextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignSettingGet',
            'PlacementTypeArray' => 'Biplane\YandexDirect\Api\V5\Contract\PlacementTypeArray',
            'DynamicTextCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextCampaignPackageBiddingStrategyGet',
            'CpmBannerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignGetItem',
            'CpmBannerCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\CpmBannerCampaignSettingGet',
            'SmartCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignGetItem',
            'SmartCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignSettingGet',
            'SmartCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartCampaignPackageBiddingStrategyGet',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteCampaignsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
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

    /**
     * Calls operation: add
     */
    public function add(AddCampaignsRequest $parameters): AddCampaignsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateCampaignsRequest $parameters): UpdateCampaignsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetCampaignsRequest $parameters): GetCampaignsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteCampaignsRequest $parameters): DeleteCampaignsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: archive
     */
    public function archive(ArchiveCampaignsRequest $parameters): ArchiveCampaignsResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    /**
     * Calls operation: unarchive
     */
    public function unarchive(UnarchiveCampaignsRequest $parameters): UnarchiveCampaignsResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendCampaignsRequest $parameters): SuspendCampaignsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeCampaignsRequest $parameters): ResumeCampaignsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }
}
