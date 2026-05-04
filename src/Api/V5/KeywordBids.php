<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\KeywordBids\GetRequest;
use Biplane\YandexDirect\Api\V5\KeywordBids\GetResponse;
use Biplane\YandexDirect\Api\V5\KeywordBids\SetAutoRequest;
use Biplane\YandexDirect\Api\V5\KeywordBids\SetAutoResponse;
use Biplane\YandexDirect\Api\V5\KeywordBids\SetRequest;
use Biplane\YandexDirect\Api\V5\KeywordBids\SetResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class KeywordBids extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/keywordbids?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\KeywordBids\GetRequest',
            'KeywordBidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\KeywordBids\KeywordBidsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\KeywordBids\GetResponse',
            'KeywordBidGetItem' => 'Biplane\YandexDirect\Api\V5\KeywordBids\KeywordBidGetItem',
            'Search' => 'Biplane\YandexDirect\Api\V5\KeywordBids\Search',
            'AuctionBids' => 'Biplane\YandexDirect\Api\V5\KeywordBids\AuctionBids',
            'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\KeywordBids\AuctionBidItem',
            'Network' => 'Biplane\YandexDirect\Api\V5\KeywordBids\Network',
            'Coverage' => 'Biplane\YandexDirect\Api\V5\KeywordBids\Coverage',
            'NetworkCoverageItem' => 'Biplane\YandexDirect\Api\V5\KeywordBids\NetworkCoverageItem',
            'KeywordBidActionResult' => 'Biplane\YandexDirect\Api\V5\KeywordBids\KeywordBidActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\KeywordBids\SetRequest',
            'KeywordBidSetItem' => 'Biplane\YandexDirect\Api\V5\KeywordBids\KeywordBidSetItem',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\KeywordBids\SetResponse',
            'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\KeywordBids\SetAutoRequest',
            'KeywordBidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\KeywordBids\KeywordBidSetAutoItem',
            'BiddingRule' => 'Biplane\YandexDirect\Api\V5\KeywordBids\BiddingRule',
            'SearchByTrafficVolume' => 'Biplane\YandexDirect\Api\V5\KeywordBids\SearchByTrafficVolume',
            'NetworkByCoverage' => 'Biplane\YandexDirect\Api\V5\KeywordBids\NetworkByCoverage',
            'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\KeywordBids\SetAutoResponse',
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
