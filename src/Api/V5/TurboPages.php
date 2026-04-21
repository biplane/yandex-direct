<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetTurboPagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetTurboPagesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class TurboPages extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/turbopages?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetTurboPagesRequest',
            'TurboPagesSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\TurboPagesSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetTurboPagesResponse',
            'TurboPageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\TurboPageGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetTurboPagesRequest $parameters): GetTurboPagesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }
}
