<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class KeywordBids extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/keywordbids?wsdl';

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
                'KeywordBidFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidFieldEnum',
                'KeywordBidSearchFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSearchFieldEnum',
                'KeywordBidNetworkFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidNetworkFieldEnum',
                'KeywordBidsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidsSelectionCriteria',
                'Search' => 'Biplane\YandexDirect\Api\V5\Contract\Search',
                'AuctionBids' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBids',
                'AuctionBidItem' => 'Biplane\YandexDirect\Api\V5\Contract\AuctionBidItem',
                'Network' => 'Biplane\YandexDirect\Api\V5\Contract\Network',
                'Coverage' => 'Biplane\YandexDirect\Api\V5\Contract\Coverage',
                'NetworkCoverageItem' => 'Biplane\YandexDirect\Api\V5\Contract\NetworkCoverageItem',
                'KeywordBidBase' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidBase',
                'KeywordBidGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidGetItem',
                'KeywordBidSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidSetItem',
                'KeywordBidActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\KeywordBidActionResult',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordBidsResponse',
                'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsRequest',
                'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetKeywordBidsResponse',
            ]
        ]);
    }

    /**
     * get.
     *
     * @param Contract\GetKeywordBidsRequest $parameters
     * @return Contract\GetKeywordBidsResponse
     */
    public function get(Contract\GetKeywordBidsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * set.
     *
     * @param Contract\SetKeywordBidsRequest $parameters
     * @return Contract\SetKeywordBidsResponse
     */
    public function set(Contract\SetKeywordBidsRequest $parameters)
    {
        return $this->invoke('set', [$parameters]);
    }


}

