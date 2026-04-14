<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddNegativeKeywordSharedSetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddNegativeKeywordSharedSetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteNegativeKeywordSharedSetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteNegativeKeywordSharedSetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetNegativeKeywordSharedSetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetNegativeKeywordSharedSetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateNegativeKeywordSharedSetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateNegativeKeywordSharedSetsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSets extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/negativekeywordsharedsets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetNegativeKeywordSharedSetsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetNegativeKeywordSharedSetsResponse',
            'NegativeKeywordSharedSetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetGetItem',
            'NegativeKeywordSharedSetBase' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddNegativeKeywordSharedSetsRequest',
            'NegativeKeywordSharedSetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddNegativeKeywordSharedSetsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateNegativeKeywordSharedSetsRequest',
            'NegativeKeywordSharedSetUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateNegativeKeywordSharedSetsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteNegativeKeywordSharedSetsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteNegativeKeywordSharedSetsResponse',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetNegativeKeywordSharedSetsRequest $parameters): GetNegativeKeywordSharedSetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddNegativeKeywordSharedSetsRequest $parameters): AddNegativeKeywordSharedSetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateNegativeKeywordSharedSetsRequest $parameters): UpdateNegativeKeywordSharedSetsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteNegativeKeywordSharedSetsRequest $parameters): DeleteNegativeKeywordSharedSetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
