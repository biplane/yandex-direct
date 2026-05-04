<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\AdImages\AddRequest;
use Biplane\YandexDirect\Api\V5\AdImages\AddResponse;
use Biplane\YandexDirect\Api\V5\AdImages\DeleteRequest;
use Biplane\YandexDirect\Api\V5\AdImages\DeleteResponse;
use Biplane\YandexDirect\Api\V5\AdImages\GetRequest;
use Biplane\YandexDirect\Api\V5\AdImages\GetResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AdImages extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/adimages?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\AdImages\AddRequest',
            'AdImageAddItem' => 'Biplane\YandexDirect\Api\V5\AdImages\AdImageAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\AdImages\AddResponse',
            'AdImageActionResult' => 'Biplane\YandexDirect\Api\V5\AdImages\AdImageActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\AdImages\GetRequest',
            'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\AdImages\AdImageSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\AdImages\GetResponse',
            'AdImageGetItem' => 'Biplane\YandexDirect\Api\V5\AdImages\AdImageGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\AdImages\DeleteRequest',
            'AdImageHashesCriteria' => 'Biplane\YandexDirect\Api\V5\AdImages\AdImageHashesCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\AdImages\DeleteResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
