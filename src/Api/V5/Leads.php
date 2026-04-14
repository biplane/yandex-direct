<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetLeadsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetLeadsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Leads extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/leads?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetLeadsRequest',
            'LeadsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\LeadsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetLeadsResponse',
            'LeadGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\LeadGetItem',
            'LeadDataItem' => 'Biplane\YandexDirect\Api\V5\Contract\LeadDataItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetLeadsRequest $parameters): GetLeadsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }
}
