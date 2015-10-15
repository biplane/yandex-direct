<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class Bids extends V5SoapClient
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/bids?wsdl';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct(self::ENDPOINT, $dispatcher, $user, array(
            'classmap' => array(
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'BidFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidFieldEnum',
                'CalculateByEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CalculateByEnum',
                'BidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\BidActionResult',
                'BidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidsSelectionCriteria',
                'SearchPrices' => 'Biplane\YandexDirect\Api\V5\Contract\SearchPrices',
                'ContextCoverage' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverage',
                'ContextCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverageItem',
                'BidBase' => 'Biplane\YandexDirect\Api\V5\Contract\BidBase',
                'BidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidGetItem',
                'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
                'BidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetItem',
                'BidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetAutoItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsResponse',
                'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsRequest',
                'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsResponse',
                'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsRequest',
                'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsResponse'
            )
        ));
    }

    /**
     * get.
     *
     * @param Contract\GetBidsRequest $parameters
     * @return Contract\GetBidsResponse
     */
    public function get(Contract\GetBidsRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * set.
     *
     * @param Contract\SetBidsRequest $parameters
     * @return Contract\SetBidsResponse
     */
    public function set(Contract\SetBidsRequest $parameters)
    {
        return $this->invoke('set', array($parameters));
    }

    /**
     * setAuto.
     *
     * @param Contract\SetAutoBidsRequest $parameters
     * @return Contract\SetAutoBidsResponse
     */
    public function setAuto(Contract\SetAutoBidsRequest $parameters)
    {
        return $this->invoke('setAuto', array($parameters));
    }


}

