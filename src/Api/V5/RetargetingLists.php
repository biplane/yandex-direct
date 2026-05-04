<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\RetargetingLists\AddRequest;
use Biplane\YandexDirect\Api\V5\RetargetingLists\AddResponse;
use Biplane\YandexDirect\Api\V5\RetargetingLists\DeleteRequest;
use Biplane\YandexDirect\Api\V5\RetargetingLists\DeleteResponse;
use Biplane\YandexDirect\Api\V5\RetargetingLists\GetRequest;
use Biplane\YandexDirect\Api\V5\RetargetingLists\GetResponse;
use Biplane\YandexDirect\Api\V5\RetargetingLists\UpdateRequest;
use Biplane\YandexDirect\Api\V5\RetargetingLists\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class RetargetingLists extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/retargetinglists?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\GetRequest',
            'RetargetingListSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\GetResponse',
            'RetargetingListGetItem' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListGetItem',
            'AvailableForTargetsInAdGroupTypesArray' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\AvailableForTargetsInAdGroupTypesArray',
            'RetargetingListBase' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListBase',
            'RetargetingListRuleItem' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListRuleItem',
            'RetargetingListRuleArgumentItem' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListRuleArgumentItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\AddRequest',
            'RetargetingListAddItem' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\UpdateRequest',
            'RetargetingListUpdateItem' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\RetargetingListUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\UpdateResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\RetargetingLists\DeleteResponse',
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
     * Calls operation: add
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
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

    /**
     * Calls operation: delete
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
