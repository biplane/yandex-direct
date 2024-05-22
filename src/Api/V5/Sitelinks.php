<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddSitelinksRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddSitelinksResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetSitelinksRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetSitelinksResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Sitelinks extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/sitelinks?wsdl';

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
            'SitelinksSetFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetFieldEnum',
            'SitelinkAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkAddItem',
            'SitelinkGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkGetItem',
            'SitelinksSetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetAddItem',
            'SitelinksSetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetGetItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksResponse',
            'SitelinkFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkFieldEnum',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddSitelinksRequest $parameters): AddSitelinksResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function get(GetSitelinksRequest $parameters): GetSitelinksResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function delete(DeleteSitelinksRequest $parameters): DeleteSitelinksResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
