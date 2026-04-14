<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAdImagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAdImagesResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAdImagesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAdImagesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AdImages extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/adimages?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdImagesRequest',
            'AdImageAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdImagesResponse',
            'AdImageActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdImagesRequest',
            'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdImagesResponse',
            'AdImageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesRequest',
            'AdImageHashesCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageHashesCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesResponse',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddAdImagesRequest $parameters): AddAdImagesResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetAdImagesRequest $parameters): GetAdImagesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteAdImagesRequest $parameters): DeleteAdImagesResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
