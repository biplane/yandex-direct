<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetBidsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Bids extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/bids?wsdl';

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
            'BidFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidFieldEnum',
            'CalculateByEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CalculateByEnum',
            'BidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidsSelectionCriteria',
            'SearchPrices' => 'Biplane\YandexDirect\Api\V5\Contract\SearchPrices',
            'ContextCoverage' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverage',
            'ContextCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverageItem',
            'BidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\BidActionResult',
            'BidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidGetItem',
            'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
            'BidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetItem',
            'BidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetAutoItem',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsResponse',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsRequest',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsResponse',
            'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsRequest',
            'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function get(GetBidsRequest $parameters): GetBidsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function set(SetBidsRequest $parameters): SetBidsResponse
    {
        return $this->__soapCall('set', [$parameters]);
    }

    public function setAuto(SetAutoBidsRequest $parameters): SetAutoBidsResponse
    {
        return $this->__soapCall('setAuto', [$parameters]);
    }
}
