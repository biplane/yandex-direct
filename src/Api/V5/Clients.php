<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetClientsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetClientsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateClientsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateClientsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Clients extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/clients?wsdl';

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
            'ClientRestrictionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionEnum',
            'ClientSettingGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingGetEnum',
            'ClientSettingAddEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingAddEnum',
            'ClientSettingUpdateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingUpdateEnum',
            'PrivilegeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PrivilegeEnum',
            'TinTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TinTypeEnum',
            'TinInfoFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoFieldEnum',
            'TinInfoGet' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoGet',
            'TinInfoAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoAdd',
            'TinInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoUpdate',
            'OrgInfoFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OrgInfoFieldEnum',
            'ContragentInfoFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentInfoFieldEnum',
            'ContractInfoFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ContractInfoFieldEnum',
            'ContractTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ContractTypeEnum',
            'ContractActionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ContractActionTypeEnum',
            'ContractSubjectTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ContractSubjectTypeEnum',
            'OrgInfo' => 'Biplane\YandexDirect\Api\V5\Contract\OrgInfo',
            'ContractBaseInfo' => 'Biplane\YandexDirect\Api\V5\Contract\ContractBaseInfo',
            'ContractInfoGet' => 'Biplane\YandexDirect\Api\V5\Contract\ContractInfoGet',
            'ContractInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ContractInfoUpdate',
            'ContractPrice' => 'Biplane\YandexDirect\Api\V5\Contract\ContractPrice',
            'ContragentBaseInfo' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentBaseInfo',
            'ContragentInfoGet' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentInfoGet',
            'ContragentInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentInfoUpdate',
            'ErirAttributesGet' => 'Biplane\YandexDirect\Api\V5\Contract\ErirAttributesGet',
            'ErirAttributesUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ErirAttributesUpdate',
            'EmailSubscriptionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSubscriptionEnum',
            'EmailSubscriptionItem' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSubscriptionItem',
            'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotification',
            'NotificationAdd' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotificationAdd',
            'NotificationUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\NotificationUpdate',
            'NotificationGet' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotificationGet',
            'ClientRestrictionItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionItem',
            'ClientSettingGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingGetItem',
            'ClientSettingAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingAddItem',
            'ClientSettingUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingUpdateItem',
            'GrantItem' => 'Biplane\YandexDirect\Api\V5\Contract\GrantItem',
            'GrantGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\GrantGetItem',
            'BonusesItem' => 'Biplane\YandexDirect\Api\V5\Contract\BonusesItem',
            'Representative' => 'Biplane\YandexDirect\Api\V5\Contract\Representative',
            'ClientBaseItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientBaseItem',
            'ClientGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientGetItem',
            'ClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientUpdateItem',
            'ClientFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientFieldEnum',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetClientsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetClientsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateClientsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateClientsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function get(GetClientsRequest $parameters): GetClientsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function update(UpdateClientsRequest $parameters): UpdateClientsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }
}
