<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateRequest;
use Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateResponse;
use Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeRequest;
use Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class KeywordsResearch extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/keywordsresearch?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'HasSearchVolumeRequest' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeRequest',
            'HasSearchVolumeSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeSelectionCriteria',
            'HasSearchVolumeResponse' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeResponse',
            'HasSearchVolumeItem' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\HasSearchVolumeItem',
            'DeduplicateRequest' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateRequest',
            'DeduplicateRequestItem' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateRequestItem',
            'DeduplicateResponse' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateResponse',
            'DeduplicateResponseAddItem' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateResponseAddItem',
            'DeduplicateResponseUpdateItem' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateResponseUpdateItem',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeduplicateErrorItem' => 'Biplane\YandexDirect\Api\V5\KeywordsResearch\DeduplicateErrorItem',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: hasSearchVolume
     */
    public function hasSearchVolume(HasSearchVolumeRequest $parameters): HasSearchVolumeResponse
    {
        return $this->__soapCall('hasSearchVolume', [$parameters]);
    }

    /**
     * Calls operation: deduplicate
     */
    public function deduplicate(DeduplicateRequest $parameters): DeduplicateResponse
    {
        return $this->__soapCall('deduplicate', [$parameters]);
    }
}
