<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetAutoResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsResponse;
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
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsRequest',
            'KeywordBidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsResponse',
            'KeywordBidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidGetItem',
            'Search' => 'Biplane\YandexDirect\Api\V5\Contract\Search',
            'AuctionBids' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBids',
            'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
            'Network' => 'Biplane\YandexDirect\Api\V5\Contract\Network',
            'Coverage' => 'Biplane\YandexDirect\Api\V5\Contract\Coverage',
            'NetworkCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\NetworkCoverageItem',
            'KeywordBidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsRequest',
            'KeywordBidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSetItem',
            'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsResponse',
            'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoRequest',
            'KeywordBidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSetAutoItem',
            'BiddingRule' => 'Biplane\YandexDirect\Api\V5\Contract\BiddingRule',
            'SearchByTrafficVolume' => 'Biplane\YandexDirect\Api\V5\Contract\SearchByTrafficVolume',
            'NetworkByCoverage' => 'Biplane\YandexDirect\Api\V5\Contract\NetworkByCoverage',
            'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetKeywordBidsRequest $parameters): GetKeywordBidsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: set
     */
    public function set(SetKeywordBidsRequest $parameters): SetKeywordBidsResponse
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
