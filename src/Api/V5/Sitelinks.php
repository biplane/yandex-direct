<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Sitelinks\AddRequest;
use Biplane\YandexDirect\Api\V5\Sitelinks\AddResponse;
use Biplane\YandexDirect\Api\V5\Sitelinks\DeleteRequest;
use Biplane\YandexDirect\Api\V5\Sitelinks\DeleteResponse;
use Biplane\YandexDirect\Api\V5\Sitelinks\GetRequest;
use Biplane\YandexDirect\Api\V5\Sitelinks\GetResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class Sitelinks extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/sitelinks?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Sitelinks\AddRequest',
            'SitelinksSetAddItem' => 'Biplane\YandexDirect\Api\V5\Sitelinks\SitelinksSetAddItem',
            'SitelinkAddItem' => 'Biplane\YandexDirect\Api\V5\Sitelinks\SitelinkAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Sitelinks\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Sitelinks\GetRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Sitelinks\GetResponse',
            'SitelinksSetGetItem' => 'Biplane\YandexDirect\Api\V5\Sitelinks\SitelinksSetGetItem',
            'SitelinkGetItem' => 'Biplane\YandexDirect\Api\V5\Sitelinks\SitelinkGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Sitelinks\DeleteRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Sitelinks\DeleteResponse',
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
