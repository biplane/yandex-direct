<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetBusinessesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetBusinessesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Businesses extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/businesses?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBusinessesRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBusinessesResponse',
            'BusinessGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BusinessGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetBusinessesRequest $parameters): GetBusinessesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }
}
