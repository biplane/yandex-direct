<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsResponse;
use Biplane\YandexDirect\Config;

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
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsRequest',
            'RetargetingListSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsResponse',
            'RetargetingListGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListGetItem',
            'AvailableForTargetsInAdGroupTypesArray' => 'Biplane\YandexDirect\Api\V5\Contract\AvailableForTargetsInAdGroupTypesArray',
            'RetargetingListBase' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListBase',
            'RetargetingListRuleItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleItem',
            'RetargetingListRuleArgumentItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleArgumentItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsRequest',
            'RetargetingListAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsRequest',
            'RetargetingListUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRetargetingListsRequest $parameters): GetRetargetingListsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRetargetingListsRequest $parameters): AddRetargetingListsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateRetargetingListsRequest $parameters): UpdateRetargetingListsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteRetargetingListsRequest $parameters): DeleteRetargetingListsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
