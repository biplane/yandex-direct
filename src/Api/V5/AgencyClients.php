<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationMemberRequest;
use Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationMemberResponse;
use Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationRequest;
use Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationResponse;
use Biplane\YandexDirect\Api\V5\AgencyClients\AddRequest;
use Biplane\YandexDirect\Api\V5\AgencyClients\AddResponse;
use Biplane\YandexDirect\Api\V5\AgencyClients\GetRequest;
use Biplane\YandexDirect\Api\V5\AgencyClients\GetResponse;
use Biplane\YandexDirect\Api\V5\AgencyClients\UpdateRequest;
use Biplane\YandexDirect\Api\V5\AgencyClients\UpdateResponse;
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
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\AgencyClients\GetRequest',
            'AgencyClientsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AgencyClientsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\AgencyClients\GetResponse',
            'ClientGetItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientGetItem',
            'GrantGetItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\GrantGetItem',
            'GrantItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\GrantItem',
            'BonusesItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\BonusesItem',
            'NotificationGet' => 'Biplane\YandexDirect\Api\V5\GeneralClients\NotificationGet',
            'Notification' => 'Biplane\YandexDirect\Api\V5\GeneralClients\Notification',
            'EmailSubscriptionItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\EmailSubscriptionItem',
            'Representative' => 'Biplane\YandexDirect\Api\V5\GeneralClients\Representative',
            'ClientRestrictionItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientRestrictionItem',
            'ClientSettingGetItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientSettingGetItem',
            'TinInfoGet' => 'Biplane\YandexDirect\Api\V5\GeneralClients\TinInfoGet',
            'ErirAttributesGet' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ErirAttributesGet',
            'OrgInfo' => 'Biplane\YandexDirect\Api\V5\GeneralClients\OrgInfo',
            'ContractInfoGet' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContractInfoGet',
            'ContractPrice' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContractPrice',
            'ContractBaseInfo' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContractBaseInfo',
            'ContragentInfoGet' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContragentInfoGet',
            'ContragentBaseInfo' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContragentBaseInfo',
            'ClientBaseItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientBaseItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AddRequest',
            'NotificationAdd' => 'Biplane\YandexDirect\Api\V5\GeneralClients\NotificationAdd',
            'ClientSettingAddItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientSettingAddItem',
            'TinInfoAdd' => 'Biplane\YandexDirect\Api\V5\GeneralClients\TinInfoAdd',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AddResponse',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'AddPassportOrganizationRequest' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationRequest',
            'AddPassportOrganizationResponse' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationResponse',
            'AddPassportOrganizationMemberRequest' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationMemberRequest',
            'SendInviteTo' => 'Biplane\YandexDirect\Api\V5\AgencyClients\SendInviteTo',
            'AddPassportOrganizationMemberResponse' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AddPassportOrganizationMemberResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\AgencyClients\UpdateRequest',
            'AgencyClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\AgencyClients\AgencyClientUpdateItem',
            'ClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientUpdateItem',
            'NotificationUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\NotificationUpdate',
            'ClientSettingUpdateItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientSettingUpdateItem',
            'TinInfoUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\TinInfoUpdate',
            'ErirAttributesUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ErirAttributesUpdate',
            'ContractInfoUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContractInfoUpdate',
            'ContragentInfoUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContragentInfoUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\AgencyClients\UpdateResponse',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\General\ClientsActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRequest $parameters): AddResponse
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
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }
}
