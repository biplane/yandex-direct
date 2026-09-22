<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Campaigns\AddRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\AddResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\ArchiveRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\ArchiveResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\DeleteRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\DeleteResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\GetRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\GetResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\ResumeRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\ResumeResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\SuspendRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\SuspendResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\UnarchiveRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\UnarchiveResponse;
use Biplane\YandexDirect\Api\V5\Campaigns\UpdateRequest;
use Biplane\YandexDirect\Api\V5\Campaigns\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class Campaigns extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/campaigns?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\AddRequest',
            'CampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignAddItem',
            'DailyBudget' => 'Biplane\YandexDirect\Api\V5\Campaigns\DailyBudget',
            'TextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignAddItem',
            'TextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignStrategyAdd',
            'TextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignSearchStrategyAdd',
            'TextCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignSearchStrategyPlacementTypes',
            'TextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignStrategyAddBase',
            'StrategyMaximumClicksAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumClicksAdd',
            'CustomPeriodBudget' => 'Biplane\YandexDirect\Api\V5\Campaigns\CustomPeriodBudget',
            'StrategyWeeklyBudgetAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWeeklyBudgetAddBase',
            'StrategyMaximumConversionRateAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumConversionRateAdd',
            'StrategyAverageCpcAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpcAdd',
            'StrategyAverageCpaAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaAdd',
            'ExplorationBudget' => 'Biplane\YandexDirect\Api\V5\Campaigns\ExplorationBudget',
            'StrategyPayForConversionAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionAdd',
            'StrategyWeeklyClickPackageAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWeeklyClickPackageAdd',
            'StrategyAverageRoiAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageRoiAdd',
            'StrategyAverageCrrAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCrrAdd',
            'StrategyPayForConversionCrrAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionCrrAdd',
            'StrategyAverageCpaMultipleGoalsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaMultipleGoalsAdd',
            'StrategyPayForConversionMultipleGoalsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionMultipleGoalsAdd',
            'StrategyMaxProfitAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaxProfitAdd',
            'TextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignNetworkStrategyAdd',
            'StrategyNetworkDefaultAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyNetworkDefaultAdd',
            'TextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignSetting',
            'RelevantKeywordsSettingAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\RelevantKeywordsSettingAdd',
            'PriorityGoalsArray' => 'Biplane\YandexDirect\Api\V5\Campaigns\PriorityGoalsArray',
            'PriorityGoalsItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\PriorityGoalsItem',
            'TextCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignPackageBiddingStrategyAdd',
            'TextCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignPlatforms',
            'PackageBiddingStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\PackageBiddingStrategyAddBase',
            'UnifiedCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignAddItem',
            'UnifiedCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignStrategyAdd',
            'UnifiedCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignSearchStrategyAdd',
            'UnifiedCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignSearchStrategyPlacementTypes',
            'UnifiedCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignStrategyAddBase',
            'StrategyHighestPositionAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyHighestPositionAdd',
            'UnifiedCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignNetworkStrategyAdd',
            'UnifiedCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignSetting',
            'UnifiedCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignPackageBiddingStrategyAdd',
            'UnifiedCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignPlatforms',
            'MobileAppCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignAddItem',
            'MobileAppCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignStrategyAdd',
            'MobileAppCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignSearchStrategyAdd',
            'MobileAppCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignStrategyAddBase',
            'StrategyMaximumAppInstallsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumAppInstallsAdd',
            'StrategyAverageCpiAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpiAdd',
            'StrategyPayForInstallAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForInstallAdd',
            'MobileAppCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignNetworkStrategyAdd',
            'MobileAppCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignSetting',
            'DynamicTextCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignAddItem',
            'DynamicTextCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignStrategyAdd',
            'DynamicTextCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignSearchStrategyAdd',
            'DynamicTextCampaignSearchStrategyPlacementTypesAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignSearchStrategyPlacementTypesAdd',
            'DynamicTextCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignStrategyAddBase',
            'DynamicTextCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignNetworkStrategyAdd',
            'DynamicTextCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignSetting',
            'PlacementType' => 'Biplane\YandexDirect\Api\V5\Campaigns\PlacementType',
            'DynamicTextCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignPackageBiddingStrategyAdd',
            'CpmBannerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignAddItem',
            'CpmBannerCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignStrategyAdd',
            'CpmBannerCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignSearchStrategyAdd',
            'CpmBannerCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignNetworkStrategyAdd',
            'StrategyManualCpmAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyManualCpmAdd',
            'StrategyWbMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWbMaximumImpressionsAdd',
            'StrategyMaximumImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumImpressionsAddBase',
            'StrategyCpMaximumImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyCpMaximumImpressionsAdd',
            'StrategyWbDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWbDecreasedPriceForRepeatedImpressionsAdd',
            'StrategyDecreasedPriceForRepeatedImpressionsAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyDecreasedPriceForRepeatedImpressionsAddBase',
            'StrategyCpDecreasedPriceForRepeatedImpressionsAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyCpDecreasedPriceForRepeatedImpressionsAdd',
            'StrategyWbAverageCpvAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWbAverageCpvAdd',
            'StrategyAverageCpvAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpvAddBase',
            'StrategyCpAverageCpvAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyCpAverageCpvAdd',
            'CpmBannerCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignSetting',
            'FrequencyCapSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\FrequencyCapSetting',
            'SmartCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignAddItem',
            'SmartCampaignStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignStrategyAdd',
            'SmartCampaignSearchStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignSearchStrategyAdd',
            'SmartCampaignStrategyAddBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignStrategyAddBase',
            'StrategyAverageCpcPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpcPerCampaignAdd',
            'StrategyAverageCpcPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpcPerFilterAdd',
            'StrategyAverageCpaPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaPerCampaignAdd',
            'StrategyPayForConversionPerCampaignAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionPerCampaignAdd',
            'StrategyPayForConversionPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionPerFilterAdd',
            'StrategyAverageCpaPerFilterAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaPerFilterAdd',
            'SmartCampaignNetworkStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignNetworkStrategyAdd',
            'SmartCampaignSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignSetting',
            'SmartCampaignPackageBiddingStrategyAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignPackageBiddingStrategyAdd',
            'SmartCampaignPlatforms' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignPlatforms',
            'TimeTargetingAdd' => 'Biplane\YandexDirect\Api\V5\Campaigns\TimeTargetingAdd',
            'TimeTargetingOnPublicHolidays' => 'Biplane\YandexDirect\Api\V5\Campaigns\TimeTargetingOnPublicHolidays',
            'TimeTargetingBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\TimeTargetingBase',
            'CampaignBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignBase',
            'Notification' => 'Biplane\YandexDirect\Api\V5\Campaigns\Notification',
            'SmsSettings' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmsSettings',
            'EmailSettings' => 'Biplane\YandexDirect\Api\V5\Campaigns\EmailSettings',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\UpdateRequest',
            'CampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignUpdateItem',
            'TextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignUpdateItem',
            'TextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignStrategy',
            'TextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignSearchStrategy',
            'TextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignStrategyBase',
            'StrategyMaximumClicks' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumClicks',
            'StrategyWeeklyBudgetBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWeeklyBudgetBase',
            'StrategyMaximumConversionRate' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumConversionRate',
            'StrategyAverageCpc' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpc',
            'StrategyAverageCpa' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpa',
            'StrategyPayForConversion' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversion',
            'StrategyWeeklyClickPackage' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWeeklyClickPackage',
            'StrategyAverageRoi' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageRoi',
            'StrategyAverageCrr' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCrr',
            'StrategyPayForConversionCrr' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionCrr',
            'StrategyAverageCpaMultipleGoals' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaMultipleGoals',
            'StrategyPayForConversionMultipleGoals' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionMultipleGoals',
            'StrategyMaxProfit' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaxProfit',
            'TextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignNetworkStrategy',
            'StrategyNetworkDefault' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyNetworkDefault',
            'PriorityGoalsUpdateSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\PriorityGoalsUpdateSetting',
            'PriorityGoalsUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\PriorityGoalsUpdateItem',
            'TextCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignPackageBiddingStrategyUpdate',
            'PackageBiddingStrategyUpdateBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\PackageBiddingStrategyUpdateBase',
            'TextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignBase',
            'RelevantKeywordsSetting' => 'Biplane\YandexDirect\Api\V5\Campaigns\RelevantKeywordsSetting',
            'UnifiedCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignUpdateItem',
            'UnifiedCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignStrategy',
            'UnifiedCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignSearchStrategy',
            'UnifiedCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignStrategyBase',
            'StrategyHighestPosition' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyHighestPosition',
            'UnifiedCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignNetworkStrategy',
            'UnifiedCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignPackageBiddingStrategyUpdate',
            'UnifiedCampaignBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignBase',
            'MobileAppCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignUpdateItem',
            'MobileAppCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignStrategy',
            'MobileAppCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignSearchStrategy',
            'MobileAppCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignStrategyBase',
            'StrategyMaximumAppInstalls' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumAppInstalls',
            'StrategyAverageCpi' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpi',
            'StrategyPayForInstall' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForInstall',
            'MobileAppCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignNetworkStrategy',
            'DynamicTextCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignUpdateItem',
            'DynamicTextCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignStrategy',
            'DynamicTextCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignSearchStrategy',
            'DynamicTextCampaignSearchStrategyPlacementTypes' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignSearchStrategyPlacementTypes',
            'DynamicTextCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignStrategyBase',
            'DynamicTextCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignNetworkStrategy',
            'DynamicTextCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignPackageBiddingStrategyUpdate',
            'DynamicTextCampaignBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignBase',
            'CpmBannerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignUpdateItem',
            'CpmBannerCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignStrategy',
            'CpmBannerCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignSearchStrategy',
            'CpmBannerCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignNetworkStrategy',
            'StrategyManualCpm' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyManualCpm',
            'StrategyWbMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWbMaximumImpressions',
            'StrategyMaximumImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyMaximumImpressionsBase',
            'StrategyCpMaximumImpressions' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyCpMaximumImpressions',
            'StrategyWbDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWbDecreasedPriceForRepeatedImpressions',
            'StrategyDecreasedPriceForRepeatedImpressionsBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyDecreasedPriceForRepeatedImpressionsBase',
            'StrategyCpDecreasedPriceForRepeatedImpressions' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyCpDecreasedPriceForRepeatedImpressions',
            'StrategyWbAverageCpv' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyWbAverageCpv',
            'StrategyAverageCpvBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpvBase',
            'StrategyCpAverageCpv' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyCpAverageCpv',
            'CpmBannerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignBase',
            'SmartCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignUpdateItem',
            'SmartCampaignStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignStrategy',
            'SmartCampaignSearchStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignSearchStrategy',
            'SmartCampaignStrategyBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignStrategyBase',
            'StrategyAverageCpcPerCampaign' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpcPerCampaign',
            'StrategyAverageCpcPerFilter' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpcPerFilter',
            'StrategyAverageCpaPerCampaign' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaPerCampaign',
            'StrategyPayForConversionPerCampaign' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionPerCampaign',
            'StrategyPayForConversionPerFilter' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyPayForConversionPerFilter',
            'StrategyAverageCpaPerFilter' => 'Biplane\YandexDirect\Api\V5\Campaigns\StrategyAverageCpaPerFilter',
            'SmartCampaignNetworkStrategy' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignNetworkStrategy',
            'SmartCampaignPackageBiddingStrategyUpdate' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignPackageBiddingStrategyUpdate',
            'SmartCampaignBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignBase',
            'TimeTargeting' => 'Biplane\YandexDirect\Api\V5\Campaigns\TimeTargeting',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\UpdateResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\GetRequest',
            'CampaignsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\GetResponse',
            'CampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignGetItem',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\General\Statistics',
            'FundsParam' => 'Biplane\YandexDirect\Api\V5\Campaigns\FundsParam',
            'CampaignFundsParam' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignFundsParam',
            'SharedAccountFundsParam' => 'Biplane\YandexDirect\Api\V5\Campaigns\SharedAccountFundsParam',
            'CampaignAssistant' => 'Biplane\YandexDirect\Api\V5\Campaigns\CampaignAssistant',
            'TextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignGetItem',
            'TextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignSettingGet',
            'TextCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\TextCampaignPackageBiddingStrategyGet',
            'PackageBiddingStrategyGetBase' => 'Biplane\YandexDirect\Api\V5\Campaigns\PackageBiddingStrategyGetBase',
            'UnifiedCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignGetItem',
            'UnifiedCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignSettingGet',
            'UnifiedCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnifiedCampaignPackageBiddingStrategyGet',
            'MobileAppCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignGetItem',
            'MobileAppCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignSettingGet',
            'MobileAppCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\MobileAppCampaignPackageBiddingStrategyGet',
            'DynamicTextCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignGetItem',
            'DynamicTextCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignSettingGet',
            'PlacementTypeArray' => 'Biplane\YandexDirect\Api\V5\Campaigns\PlacementTypeArray',
            'DynamicTextCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\DynamicTextCampaignPackageBiddingStrategyGet',
            'CpmBannerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignGetItem',
            'CpmBannerCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\CpmBannerCampaignSettingGet',
            'SmartCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignGetItem',
            'SmartCampaignSettingGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignSettingGet',
            'SmartCampaignPackageBiddingStrategyGet' => 'Biplane\YandexDirect\Api\V5\Campaigns\SmartCampaignPackageBiddingStrategyGet',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\DeleteResponse',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\ArchiveRequest',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\ArchiveResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnarchiveRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\UnarchiveResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\SuspendRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\SuspendResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Campaigns\ResumeRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Campaigns\ResumeResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: get
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: archive
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function archive(ArchiveRequest $parameters): ArchiveResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    /**
     * Calls operation: unarchive
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function unarchive(UnarchiveRequest $parameters): UnarchiveResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }

    /**
     * Calls operation: suspend
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function suspend(SuspendRequest $parameters): SuspendResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function resume(ResumeRequest $parameters): ResumeResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }
}
