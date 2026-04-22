<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddVCardsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddVCardsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetVCardsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetVCardsResponse;
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
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddVCardsRequest',
            'VCardAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardAddItem',
            'Phone' => 'Biplane\YandexDirect\Api\V5\Contract\Phone',
            'InstantMessenger' => 'Biplane\YandexDirect\Api\V5\Contract\InstantMessenger',
            'MapPoint' => 'Biplane\YandexDirect\Api\V5\Contract\MapPoint',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddVCardsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetVCardsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetVCardsResponse',
            'VCardGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteVCardsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddVCardsRequest $parameters): AddVCardsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetVCardsRequest $parameters): GetVCardsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteVCardsRequest $parameters): DeleteVCardsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
