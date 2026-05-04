<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\VCards\AddRequest;
use Biplane\YandexDirect\Api\V5\VCards\AddResponse;
use Biplane\YandexDirect\Api\V5\VCards\DeleteRequest;
use Biplane\YandexDirect\Api\V5\VCards\DeleteResponse;
use Biplane\YandexDirect\Api\V5\VCards\GetRequest;
use Biplane\YandexDirect\Api\V5\VCards\GetResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class VCards extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/vcards?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\VCards\AddRequest',
            'VCardAddItem' => 'Biplane\YandexDirect\Api\V5\VCards\VCardAddItem',
            'Phone' => 'Biplane\YandexDirect\Api\V5\VCards\Phone',
            'InstantMessenger' => 'Biplane\YandexDirect\Api\V5\VCards\InstantMessenger',
            'MapPoint' => 'Biplane\YandexDirect\Api\V5\VCards\MapPoint',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\VCards\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\VCards\GetRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\VCards\GetResponse',
            'VCardGetItem' => 'Biplane\YandexDirect\Api\V5\VCards\VCardGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\VCards\DeleteRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\VCards\DeleteResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
