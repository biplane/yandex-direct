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
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/clients?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetClientsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetClientsResponse',
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
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateClientsRequest',
            'ClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientUpdateItem',
            'NotificationUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ClientNotificationUpdate',
            'ClientSettingUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingUpdateItem',
            'TinInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TinInfoUpdate',
            'ErirAttributesUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ErirAttributesUpdate',
            'ContractInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ContractInfoUpdate',
            'ContragentInfoUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\ContragentInfoUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateClientsResponse',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetClientsRequest $parameters): GetClientsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateClientsRequest $parameters): UpdateClientsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }
}
