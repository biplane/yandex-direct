<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class KeywordBids extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/keywordbids?wsdl';

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
            'KeywordBidFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidFieldEnum',
            'KeywordBidSearchFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSearchFieldEnum',
            'KeywordBidNetworkFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidNetworkFieldEnum',
            'KeywordBidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidsSelectionCriteria',
            'Search' => 'Biplane\YandexDirect\Api\V5\Contract\Search',
            'AuctionBids' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBids',
            'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
            'Network' => 'Biplane\YandexDirect\Api\V5\Contract\Network',
            'Coverage' => 'Biplane\YandexDirect\Api\V5\Contract\Coverage',
            'NetworkCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\NetworkCoverageItem',
            'KeywordBidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidActionResult',
            'KeywordBidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidGetItem',
            'KeywordBidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSetItem',
            'KeywordBidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSetAutoItem',
            'BiddingRule' => 'Biplane\YandexDirect\Api\V5\Contract\BiddingRule',
            'SearchByTrafficVolume' => 'Biplane\YandexDirect\Api\V5\Contract\SearchByTrafficVolume',
            'NetworkByCoverage' => 'Biplane\YandexDirect\Api\V5\Contract\NetworkByCoverage',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsResponse',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsRequest',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsResponse',
            'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoRequest',
            'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function get(GetKeywordBidsRequest $parameters): GetKeywordBidsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function set(SetKeywordBidsRequest $parameters): SetKeywordBidsResponse
    {
        return $this->__soapCall('set', [$parameters]);
    }

    public function setAuto(SetAutoRequest $parameters): SetAutoResponse
    {
        return $this->__soapCall('setAuto', [$parameters]);
    }
}
