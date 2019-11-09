<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Bids extends SoapClientV5
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
        parent::__construct($user->resolveWsdl(self::ENDPOINT), $dispatcher, $user, [
            'classmap' => [
                'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
                'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
                'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'LangEnum' => 'Biplane\YandexDirect\Api\V5\Contract\LangEnum',
                'RepresentativeRoleEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum',
                'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
                'ServingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
                'BidFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidFieldEnum',
                'CalculateByEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CalculateByEnum',
                'BidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidsSelectionCriteria',
                'SearchPrices' => 'Biplane\YandexDirect\Api\V5\Contract\SearchPrices',
                'ContextCoverage' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverage',
                'ContextCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\ContextCoverageItem',
                'BidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\BidActionResult',
                'BidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidGetItem',
                'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
                'BidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetItem',
                'BidSetAutoItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidSetAutoItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidsResponse',
                'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsRequest',
                'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsResponse',
                'SetAutoRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsRequest',
                'SetAutoResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetAutoBidsResponse',
            ]
        ]);
    }

    /**
     * get.
     *
     * @param Contract\GetBidsRequest $parameters
     * @return Contract\GetBidsResponse
     */
    public function get(Contract\GetBidsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * set.
     *
     * @param Contract\SetBidsRequest $parameters
     * @return Contract\SetBidsResponse
     */
    public function set(Contract\SetBidsRequest $parameters)
    {
        return $this->invoke('set', [$parameters]);
    }

    /**
     * setAuto.
     *
     * @param Contract\SetAutoBidsRequest $parameters
     * @return Contract\SetAutoBidsResponse
     */
    public function setAuto(Contract\SetAutoBidsRequest $parameters)
    {
        return $this->invoke('setAuto', [$parameters]);
    }


}

