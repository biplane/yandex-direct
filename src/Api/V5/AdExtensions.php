<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\AdExtensions\AddRequest;
use Biplane\YandexDirect\Api\V5\AdExtensions\AddResponse;
use Biplane\YandexDirect\Api\V5\AdExtensions\DeleteRequest;
use Biplane\YandexDirect\Api\V5\AdExtensions\DeleteResponse;
use Biplane\YandexDirect\Api\V5\AdExtensions\GetRequest;
use Biplane\YandexDirect\Api\V5\AdExtensions\GetResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class AdExtensions extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/adextensions?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\AdExtensions\AddRequest',
            'AdExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\AdExtensions\AdExtensionAddItem',
            'Callout' => 'Biplane\YandexDirect\Api\V5\AdExtensionTypes\Callout',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\AdExtensions\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\AdExtensions\GetRequest',
            'AdExtensionsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\AdExtensions\AdExtensionsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\AdExtensions\GetResponse',
            'AdExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\AdExtensions\AdExtensionGetItem',
            'AdExtensionBase' => 'Biplane\YandexDirect\Api\V5\AdExtensionTypes\AdExtensionBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\AdExtensions\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\AdExtensions\DeleteResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
