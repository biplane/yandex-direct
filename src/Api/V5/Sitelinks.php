<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddSitelinksRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddSitelinksResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetSitelinksRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetSitelinksResponse;
use Biplane\YandexDirect\Config;

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
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksRequest',
            'SitelinksSetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetAddItem',
            'SitelinkAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksResponse',
            'SitelinksSetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetGetItem',
            'SitelinkGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddSitelinksRequest $parameters): AddSitelinksResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetSitelinksRequest $parameters): GetSitelinksResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteSitelinksRequest $parameters): DeleteSitelinksResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
