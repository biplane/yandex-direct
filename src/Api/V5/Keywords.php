<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Keywords extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/keywords?wsdl';

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
            'KeywordFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordFieldEnum',
            'KeywordStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordStateSelectionEnum',
            'KeywordStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordStatusSelectionEnum',
            'KeywordsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordsSelectionCriteria',
            'KeywordAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordAddItem',
            'KeywordProductivity' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordProductivity',
            'KeywordGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordGetItem',
            'KeywordUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordUpdateItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateKeywordsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendKeywordsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeKeywordsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddKeywordsRequest $parameters): AddKeywordsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function get(GetKeywordsRequest $parameters): GetKeywordsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function update(UpdateKeywordsRequest $parameters): UpdateKeywordsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    public function delete(DeleteKeywordsRequest $parameters): DeleteKeywordsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    public function suspend(SuspendKeywordsRequest $parameters): SuspendKeywordsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    public function resume(ResumeKeywordsRequest $parameters): ResumeKeywordsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }
}
