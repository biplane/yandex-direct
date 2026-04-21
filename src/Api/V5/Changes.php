<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Contract\CheckChangesRequest;
use Biplane\YandexDirect\Api\V5\Contract\CheckChangesResponse;
use Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesRequest;
use Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Changes extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/changes?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'CheckDictionariesRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesRequest',
            'CheckDictionariesResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesResponse',
            'CheckCampaignsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsRequest',
            'CheckCampaignsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsResponse',
            'CampaignChangesItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignChangesItem',
            'CheckRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckChangesRequest',
            'CheckResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckChangesResponse',
            'CheckResponseModified' => 'Biplane\YandexDirect\Api\V5\Contract\CheckResponseModified',
            'CampaignStatItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatItem',
            'CheckResponseIds' => 'Biplane\YandexDirect\Api\V5\Contract\CheckResponseIds',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: checkDictionaries
     */
    public function checkDictionaries(CheckDictionariesRequest $parameters): CheckDictionariesResponse
    {
        return $this->__soapCall('checkDictionaries', [$parameters]);
    }

    /**
     * Calls operation: checkCampaigns
     */
    public function checkCampaigns(CheckCampaignsRequest $parameters): CheckCampaignsResponse
    {
        return $this->__soapCall('checkCampaigns', [$parameters]);
    }

    /**
     * Calls operation: check
     */
    public function check(CheckChangesRequest $parameters): CheckChangesResponse
    {
        return $this->__soapCall('check', [$parameters]);
    }
}
