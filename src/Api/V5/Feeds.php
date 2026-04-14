<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddFeedsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetFeedsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Feeds extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/feeds?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddFeedsRequest',
            'FeedAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedAddItem',
            'UrlFeedAdd' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedAdd',
            'UrlFeedBase' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedBase',
            'FileFeedAdd' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedAdd',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddFeedsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetFeedsRequest',
            'FeedsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\FeedsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetFeedsResponse',
            'FeedGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedGetItem',
            'FileFeedGet' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedGet',
            'UrlFeedGet' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedGet',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsRequest',
            'FeedUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\FeedUpdateItem',
            'UrlFeedUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\UrlFeedUpdate',
            'FileFeedUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\FileFeedUpdate',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateFeedsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteFeedsResponse',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddFeedsRequest $parameters): AddFeedsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetFeedsRequest $parameters): GetFeedsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateFeedsRequest $parameters): UpdateFeedsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteFeedsRequest $parameters): DeleteFeedsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
