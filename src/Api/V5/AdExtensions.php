<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAdExtensionsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAdExtensionsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdExtensionsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAdExtensionsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAdExtensionsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAdExtensionsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AdExtensions extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/adextensions?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdExtensionsRequest',
            'AdExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionAddItem',
            'Callout' => 'Biplane\YandexDirect\Api\V5\Contract\Callout',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdExtensionsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdExtensionsRequest',
            'AdExtensionsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdExtensionsResponse',
            'AdExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionGetItem',
            'AdExtensionBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdExtensionsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdExtensionsResponse',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddAdExtensionsRequest $parameters): AddAdExtensionsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetAdExtensionsRequest $parameters): GetAdExtensionsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteAdExtensionsRequest $parameters): DeleteAdExtensionsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
