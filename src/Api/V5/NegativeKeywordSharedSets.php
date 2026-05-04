<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\AddRequest;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\AddResponse;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\DeleteRequest;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\DeleteResponse;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\GetRequest;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\GetResponse;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\UpdateRequest;
use Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSets extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/negativekeywordsharedsets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\GetRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\GetResponse',
            'NegativeKeywordSharedSetGetItem' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\NegativeKeywordSharedSetGetItem',
            'NegativeKeywordSharedSetBase' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\NegativeKeywordSharedSetBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\AddRequest',
            'NegativeKeywordSharedSetAddItem' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\NegativeKeywordSharedSetAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\UpdateRequest',
            'NegativeKeywordSharedSetUpdateItem' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\NegativeKeywordSharedSetUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\UpdateResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\DeleteRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\NegativeKeywordSharedSets\DeleteResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
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
     * Calls operation: update
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
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
