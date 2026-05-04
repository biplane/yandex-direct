<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Businesses\GetRequest;
use Biplane\YandexDirect\Api\V5\Businesses\GetResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Businesses extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/businesses?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Businesses\GetRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Businesses\GetResponse',
            'BusinessGetItem' => 'Biplane\YandexDirect\Api\V5\Businesses\BusinessGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
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
}
