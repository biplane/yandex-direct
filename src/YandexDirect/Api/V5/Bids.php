<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Bids extends SoapClient
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
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
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
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidResponse',
                'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidRequest',
                'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidResponse',
                'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidRequest',
                'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidResponse'
            )
        ));
    }

    /**
     * get.
     *
     * @param Contract\GetBidRequest $parameters
     * @return Contract\GetBidResponse
     */
    public function get(Contract\GetBidRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * set.
     *
     * @param Contract\SetBidRequest $parameters
     * @return Contract\SetBidResponse
     */
    public function set(Contract\SetBidRequest $parameters)
    {
        return $this->invoke('set', array($parameters));
    }

    /**
     * setAuto.
     *
     * @param Contract\SetAutoBidRequest $parameters
     * @return Contract\SetAutoBidResponse
     */
    public function setAuto(Contract\SetAutoBidRequest $parameters)
    {
        return $this->invoke('setAuto', array($parameters));
    }


}

