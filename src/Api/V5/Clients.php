<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Clients\GetRequest;
use Biplane\YandexDirect\Api\V5\Clients\GetResponse;
use Biplane\YandexDirect\Api\V5\Clients\UpdateRequest;
use Biplane\YandexDirect\Api\V5\Clients\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class Clients extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/clients?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Clients\GetRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Clients\GetResponse',
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
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Clients\UpdateRequest',
            'ClientUpdateItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientUpdateItem',
            'NotificationUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\NotificationUpdate',
            'ClientSettingUpdateItem' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ClientSettingUpdateItem',
            'TinInfoUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\TinInfoUpdate',
            'ErirAttributesUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ErirAttributesUpdate',
            'ContractInfoUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContractInfoUpdate',
            'ContragentInfoUpdate' => 'Biplane\YandexDirect\Api\V5\GeneralClients\ContragentInfoUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Clients\UpdateResponse',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\General\ClientsActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: update
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }
}
