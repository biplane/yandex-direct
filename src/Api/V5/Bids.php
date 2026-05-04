<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Bids\GetRequest;
use Biplane\YandexDirect\Api\V5\Bids\GetResponse;
use Biplane\YandexDirect\Api\V5\Bids\SetAutoRequest;
use Biplane\YandexDirect\Api\V5\Bids\SetAutoResponse;
use Biplane\YandexDirect\Api\V5\Bids\SetRequest;
use Biplane\YandexDirect\Api\V5\Bids\SetResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Bids extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/bids?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Bids\GetRequest',
            'BidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Bids\BidsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Bids\GetResponse',
            'BidGetItem' => 'Biplane\YandexDirect\Api\V5\Bids\BidGetItem',
            'SearchPrices' => 'Biplane\YandexDirect\Api\V5\Bids\SearchPrices',
            'ContextCoverage' => 'Biplane\YandexDirect\Api\V5\Bids\ContextCoverage',
            'ContextCoverageItem' => 'Biplane\YandexDirect\Api\V5\Bids\ContextCoverageItem',
            'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Bids\AuctionBidItem',
            'BidActionResult' => 'Biplane\YandexDirect\Api\V5\Bids\BidActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\Bids\SetRequest',
            'BidSetItem' => 'Biplane\YandexDirect\Api\V5\Bids\BidSetItem',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\Bids\SetResponse',
            'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Bids\SetAutoRequest',
            'BidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Bids\BidSetAutoItem',
            'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Bids\SetAutoResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: set
     */
    public function set(SetRequest $parameters): SetResponse
    {
        return $this->__soapCall('set', [$parameters]);
    }

    /**
     * Calls operation: setAuto
     */
    public function setAuto(SetAutoRequest $parameters): SetAutoResponse
    {
        return $this->__soapCall('setAuto', [$parameters]);
    }
}
