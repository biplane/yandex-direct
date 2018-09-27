<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class RetargetingLists extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/retargetinglists?wsdl';

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
                'RetargetingListFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListFieldEnum',
                'RetargetingListScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListScopeEnum',
                'RetargetingListRuleOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleOperatorEnum',
                'RetargetingListTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListTypeEnum',
                'RetargetingListSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListSelectionCriteria',
                'RetargetingListRuleArgumentItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleArgumentItem',
                'RetargetingListRuleItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleItem',
                'RetargetingListBase' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListBase',
                'RetargetingListGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListGetItem',
                'RetargetingListUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListUpdateItem',
                'RetargetingListAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListAddItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsResponse',
            ]
        ]);
    }

    /**
     * get.
     *
     * @param Contract\GetRetargetingListsRequest $parameters
     * @return Contract\GetRetargetingListsResponse
     */
    public function get(Contract\GetRetargetingListsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * add.
     *
     * @param Contract\AddRetargetingListsRequest $parameters
     * @return Contract\AddRetargetingListsResponse
     */
    public function add(Contract\AddRetargetingListsRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateRetargetingListsRequest $parameters
     * @return Contract\UpdateRetargetingListsResponse
     */
    public function update(Contract\UpdateRetargetingListsRequest $parameters)
    {
        return $this->invoke('update', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteRetargetingListsRequest $parameters
     * @return Contract\DeleteRetargetingListsResponse
     */
    public function delete(Contract\DeleteRetargetingListsRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }


}

