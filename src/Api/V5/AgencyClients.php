<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAgencyClientsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAgencyClientsResponse;
use Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationMemberRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationMemberResponse;
use Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAgencyClientsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAgencyClientsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateAgencyClientsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateAgencyClientsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AgencyClients extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/agencyclients?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAgencyClientsRequest',
            'AgencyClientsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AgencyClientsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAgencyClientsResponse',
            'ClientGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientGetItem',
            'GrantGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\GrantGetItem',
            'GrantItem' => 'Biplane\YandexDirect\Api\V5\Contract\GrantItem',
            'BonusesItem' => 'Biplane\YandexDirect\Api\V5\Contract\BonusesItem',
            'NotificationGet' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotificationGet',
            'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotification',
            'EmailSubscriptionItem' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSubscriptionItem',
            'Representative' => 'Biplane\YandexDirect\Api\V5\Contract\Representative',
            'ClientRestrictionItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionItem',
            'ClientSettingGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingGetItem',
            'TinInfoGet' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoGet',
            'ErirAttributesGet' => 'Biplane\YandexDirect\Api\V5\Contract\ErirAttributesGet',
            'OrgInfo' => 'Biplane\YandexDirect\Api\V5\Contract\OrgInfo',
            'ContractInfoGet' => 'Biplane\YandexDirect\Api\V5\Contract\ContractInfoGet',
            'ContractPrice' => 'Biplane\YandexDirect\Api\V5\Contract\ContractPrice',
            'ContractBaseInfo' => 'Biplane\YandexDirect\Api\V5\Contract\ContractBaseInfo',
            'ContragentInfoGet' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentInfoGet',
            'ContragentBaseInfo' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentBaseInfo',
            'ClientBaseItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientBaseItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAgencyClientsRequest',
            'NotificationAdd' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotificationAdd',
            'ClientSettingAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingAddItem',
            'TinInfoAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoAdd',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAgencyClientsResponse',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'AddPassportOrganizationRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationRequest',
            'AddPassportOrganizationResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationResponse',
            'AddPassportOrganizationMemberRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationMemberRequest',
            'SendInviteTo' => 'Biplane\YandexDirect\Api\V5\Contract\SendInviteTo',
            'AddPassportOrganizationMemberResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddPassportOrganizationMemberResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAgencyClientsRequest',
            'AgencyClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AgencyClientUpdateItem',
            'ClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientUpdateItem',
            'NotificationUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotificationUpdate',
            'ClientSettingUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingUpdateItem',
            'TinInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoUpdate',
            'ErirAttributesUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ErirAttributesUpdate',
            'ContractInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ContractInfoUpdate',
            'ContragentInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentInfoUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAgencyClientsResponse',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetAgencyClientsRequest $parameters): GetAgencyClientsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddAgencyClientsRequest $parameters): AddAgencyClientsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: addPassportOrganization
     */
    public function addPassportOrganization(AddPassportOrganizationRequest $parameters): AddPassportOrganizationResponse
    {
        return $this->__soapCall('addPassportOrganization', [$parameters]);
    }

    /**
     * Calls operation: addPassportOrganizationMember
     */
    public function addPassportOrganizationMember(AddPassportOrganizationMemberRequest $parameters): AddPassportOrganizationMemberResponse
    {
        return $this->__soapCall('addPassportOrganizationMember', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateAgencyClientsRequest $parameters): UpdateAgencyClientsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }
}
