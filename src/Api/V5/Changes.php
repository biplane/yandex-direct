<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Changes\CheckCampaignsRequest;
use Biplane\YandexDirect\Api\V5\Changes\CheckCampaignsResponse;
use Biplane\YandexDirect\Api\V5\Changes\CheckDictionariesRequest;
use Biplane\YandexDirect\Api\V5\Changes\CheckDictionariesResponse;
use Biplane\YandexDirect\Api\V5\Changes\CheckRequest;
use Biplane\YandexDirect\Api\V5\Changes\CheckResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class Changes extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/changes?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'CheckDictionariesRequest' => 'Biplane\YandexDirect\Api\V5\Changes\CheckDictionariesRequest',
            'CheckDictionariesResponse' => 'Biplane\YandexDirect\Api\V5\Changes\CheckDictionariesResponse',
            'CheckCampaignsRequest' => 'Biplane\YandexDirect\Api\V5\Changes\CheckCampaignsRequest',
            'CheckCampaignsResponse' => 'Biplane\YandexDirect\Api\V5\Changes\CheckCampaignsResponse',
            'CampaignChangesItem' => 'Biplane\YandexDirect\Api\V5\Changes\CampaignChangesItem',
            'CheckRequest' => 'Biplane\YandexDirect\Api\V5\Changes\CheckRequest',
            'CheckResponse' => 'Biplane\YandexDirect\Api\V5\Changes\CheckResponse',
            'CheckResponseModified' => 'Biplane\YandexDirect\Api\V5\Changes\CheckResponseModified',
            'CampaignStatItem' => 'Biplane\YandexDirect\Api\V5\Changes\CampaignStatItem',
            'CheckResponseIds' => 'Biplane\YandexDirect\Api\V5\Changes\CheckResponseIds',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: checkDictionaries
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function checkDictionaries(CheckDictionariesRequest $parameters): CheckDictionariesResponse
    {
        return $this->__soapCall('checkDictionaries', [$parameters]);
    }

    /**
     * Calls operation: checkCampaigns
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function checkCampaigns(CheckCampaignsRequest $parameters): CheckCampaignsResponse
    {
        return $this->__soapCall('checkCampaigns', [$parameters]);
    }

    /**
     * Calls operation: check
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function check(CheckRequest $parameters): CheckResponse
    {
        return $this->__soapCall('check', [$parameters]);
    }
}
