<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Feeds\AddRequest;
use Biplane\YandexDirect\Api\V5\Feeds\AddResponse;
use Biplane\YandexDirect\Api\V5\Feeds\DeleteRequest;
use Biplane\YandexDirect\Api\V5\Feeds\DeleteResponse;
use Biplane\YandexDirect\Api\V5\Feeds\GetRequest;
use Biplane\YandexDirect\Api\V5\Feeds\GetResponse;
use Biplane\YandexDirect\Api\V5\Feeds\UpdateRequest;
use Biplane\YandexDirect\Api\V5\Feeds\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class Feeds extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/feeds?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Feeds\AddRequest',
            'FeedAddItem' => 'Biplane\YandexDirect\Api\V5\Feeds\FeedAddItem',
            'UrlFeedAdd' => 'Biplane\YandexDirect\Api\V5\Feeds\UrlFeedAdd',
            'UrlFeedBase' => 'Biplane\YandexDirect\Api\V5\Feeds\UrlFeedBase',
            'FileFeedAdd' => 'Biplane\YandexDirect\Api\V5\Feeds\FileFeedAdd',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Feeds\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Feeds\GetRequest',
            'FeedsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Feeds\FeedsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Feeds\GetResponse',
            'FeedGetItem' => 'Biplane\YandexDirect\Api\V5\Feeds\FeedGetItem',
            'FileFeedGet' => 'Biplane\YandexDirect\Api\V5\Feeds\FileFeedGet',
            'UrlFeedGet' => 'Biplane\YandexDirect\Api\V5\Feeds\UrlFeedGet',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Feeds\UpdateRequest',
            'FeedUpdateItem' => 'Biplane\YandexDirect\Api\V5\Feeds\FeedUpdateItem',
            'UrlFeedUpdate' => 'Biplane\YandexDirect\Api\V5\Feeds\UrlFeedUpdate',
            'FileFeedUpdate' => 'Biplane\YandexDirect\Api\V5\Feeds\FileFeedUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Feeds\UpdateResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Feeds\DeleteRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Feeds\DeleteResponse',
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
