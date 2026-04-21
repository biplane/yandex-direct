<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\DeduplicateRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponse;
use Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeKeywordsRequest;
use Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeKeywordsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class KeywordsResearch extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/keywordsresearch?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'HasSearchVolumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeKeywordsRequest',
            'HasSearchVolumeSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeSelectionCriteria',
            'HasSearchVolumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeKeywordsResponse',
            'HasSearchVolumeItem' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeItem',
            'DeduplicateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateRequest',
            'DeduplicateRequestItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateRequestItem',
            'DeduplicateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponse',
            'DeduplicateResponseAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponseAddItem',
            'DeduplicateResponseUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponseUpdateItem',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeduplicateErrorItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateErrorItem',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: hasSearchVolume
     */
    public function hasSearchVolume(HasSearchVolumeKeywordsRequest $parameters): HasSearchVolumeKeywordsResponse
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
