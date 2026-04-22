<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetBidsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsResponse;
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
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsRequest',
            'BidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsResponse',
            'BidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidGetItem',
            'SearchPrices' => 'Biplane\YandexDirect\Api\V5\Contract\SearchPrices',
            'ContextCoverage' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverage',
            'ContextCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverageItem',
            'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
            'BidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\BidActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsRequest',
            'BidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetItem',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsResponse',
            'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsRequest',
            'BidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetAutoItem',
            'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetBidsRequest $parameters): GetBidsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: set
     */
    public function set(SetBidsRequest $parameters): SetBidsResponse
    {
        return $this->__soapCall('set', [$parameters]);
    }

    /**
     * Calls operation: setAuto
     */
    public function setAuto(SetAutoBidsRequest $parameters): SetAutoBidsResponse
    {
        return $this->__soapCall('setAuto', [$parameters]);
    }
}
