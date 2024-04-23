<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Strategies extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/strategies?wsdl';

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
            'StrategyFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyFieldEnum',
            'StrategyMaximumClicksFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksFieldEnum',
            'StrategyMaximumConversionRateFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateFieldEnum',
            'StrategyAverageCpcFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcFieldEnum',
            'StrategyAverageCpaFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaFieldEnum',
            'StrategyPayForConversionFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionFieldEnum',
            'StrategyAverageCpaPerCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignFieldEnum',
            'StrategyPayForConversionPerCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignFieldEnum',
            'StrategyPayForConversionPerFilterFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterFieldEnum',
            'StrategyAverageCpaPerFilterFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterFieldEnum',
            'StrategyAverageCpcPerCampaignFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignFieldEnum',
            'StrategyAverageCpcPerFilterFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterFieldEnum',
            'StrategyAverageCrrFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrFieldEnum',
            'StrategyPayForConversionCrrFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrFieldEnum',
            'StrategyType' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyType',
            'BudgetTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BudgetTypeEnum',
            'ExplorationBudget' => 'Biplane\YandexDirect\Api\V5\Contract\ExplorationBudget',
            'CustomPeriodBudget' => 'Biplane\YandexDirect\Api\V5\Contract\CustomPeriodBudget',
            'StrategyMaximumClicksAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksAddItem',
            'StrategyMaximumConversionRateAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateAddItem',
            'StrategyAverageCpcAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcAddItem',
            'StrategyAverageCpaAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaAddItem',
            'StrategyPayForConversionAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionAddItem',
            'StrategyAverageCpaPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignAddItem',
            'StrategyPayForConversionPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignAddItem',
            'StrategyPayForConversionPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterAddItem',
            'StrategyAverageCpaPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterAddItem',
            'StrategyAverageCpcPerCampaignAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignAddItem',
            'StrategyAverageCpcPerFilterAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterAddItem',
            'StrategyAverageCrrAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrAddItem',
            'StrategyPayForConversionCrrAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrAddItem',
            'StrategyMaximumClicksBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksBase',
            'StrategyMaximumConversionRateBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateBase',
            'StrategyAverageCpcBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcBase',
            'StrategyAverageCpaBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaBase',
            'StrategyPayForConversionBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionBase',
            'StrategyAverageCpaPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignBase',
            'StrategyPayForConversionPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignBase',
            'StrategyPayForConversionPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterBase',
            'StrategyAverageCpaPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterBase',
            'StrategyAverageCpcPerCampaignBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignBase',
            'StrategyAverageCpcPerFilterBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterBase',
            'StrategyAverageCrrBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrBase',
            'StrategyPayForConversionCrrBase' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrBase',
            'PriorityGoalsItem' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsItem',
            'PriorityGoalsArray' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityGoalsArray',
            'StrategyAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAddItem',
            'StrategyMaximumClicksGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksGetItem',
            'StrategyMaximumConversionRateGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateGetItem',
            'StrategyAverageCpcGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcGetItem',
            'StrategyAverageCpaGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaGetItem',
            'StrategyPayForConversionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionGetItem',
            'StrategyAverageCpaPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignGetItem',
            'StrategyPayForConversionPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignGetItem',
            'StrategyPayForConversionPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterGetItem',
            'StrategyAverageCpaPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterGetItem',
            'StrategyAverageCpcPerCampaignGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignGetItem',
            'StrategyAverageCpcPerFilterGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterGetItem',
            'StrategyAverageCrrGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrGetItem',
            'StrategyPayForConversionCrrGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrGetItem',
            'StrategyGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyGetItem',
            'StrategiesSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\StrategiesSelectionCriteria',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetStrategiesRequest',
            'StrategyMaximumClicksUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumClicksUpdateItem',
            'StrategyMaximumConversionRateUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyMaximumConversionRateUpdateItem',
            'StrategyAverageCpcUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcUpdateItem',
            'StrategyAverageCpaUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaUpdateItem',
            'StrategyPayForConversionUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionUpdateItem',
            'StrategyAverageCpaPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerCampaignUpdateItem',
            'StrategyPayForConversionPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerCampaignUpdateItem',
            'StrategyPayForConversionPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionPerFilterUpdateItem',
            'StrategyAverageCpaPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpaPerFilterUpdateItem',
            'StrategyAverageCpcPerCampaignUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerCampaignUpdateItem',
            'StrategyAverageCpcPerFilterUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCpcPerFilterUpdateItem',
            'StrategyAverageCrrUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyAverageCrrUpdateItem',
            'StrategyPayForConversionCrrUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyPayForConversionCrrUpdateItem',
            'StrategyUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\StrategyUpdateItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddStrategiesRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddStrategiesResponse',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetStrategiesResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateStrategiesResponse',
            'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesRequest',
            'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveStrategiesResponse',
            'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesRequest',
            'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveStrategiesResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddStrategiesRequest $parameters): AddStrategiesResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function update(UpdateStrategiesRequest $parameters): UpdateStrategiesResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    public function get(GetStrategiesRequest $parameters): GetStrategiesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function archive(ArchiveStrategiesRequest $parameters): ArchiveStrategiesResponse
    {
        return $this->__soapCall('archive', [$parameters]);
    }

    public function unarchive(UnarchiveStrategiesRequest $parameters): UnarchiveStrategiesResponse
    {
        return $this->__soapCall('unarchive', [$parameters]);
    }
}
