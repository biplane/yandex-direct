<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AgencyClients extends ApiSoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/agencyclients?wsdl';

    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
            'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
            'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
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
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
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
            'ClientRestrictionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionEnum',
            'ClientSettingGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingGetEnum',
            'ClientSettingAddEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingAddEnum',
            'ClientSettingUpdateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingUpdateEnum',
            'PrivilegeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PrivilegeEnum',
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
            'AgencyClientFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgencyClientFieldEnum',
            'AgencyClientsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AgencyClientsSelectionCriteria',
            'AgencyClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AgencyClientUpdateItem',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAgencyClientsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAgencyClientsResponse',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAgencyClientsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAgencyClientsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAgencyClientsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAgencyClientsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * get.
     *
     * @param Contract\GetAgencyClientsRequest $parameters
     * @return Contract\GetAgencyClientsResponse
     */
    public function get(Contract\GetAgencyClientsRequest $parameters)
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * add.
     *
     * @param Contract\AddAgencyClientsRequest $parameters
     * @return Contract\AddAgencyClientsResponse
     */
    public function add(Contract\AddAgencyClientsRequest $parameters)
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateAgencyClientsRequest $parameters
     * @return Contract\UpdateAgencyClientsResponse
     */
    public function update(Contract\UpdateAgencyClientsRequest $parameters)
    {
        return $this->__soapCall('update', [$parameters]);
    }


}

