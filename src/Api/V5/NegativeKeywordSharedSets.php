<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class NegativeKeywordSharedSets extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/negativekeywordsharedsets?wsdl';

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
                'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
                'StringConditionOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum',
                'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
                'VideoTargetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VideoTargetEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'ConditionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionTypeEnum',
                'AdTargetStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetStateSelectionEnum',
                'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
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
                'SerpLayoutEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IncomeGradeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeEnum',
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
                'NegativeKeywordSharedSetFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetFieldEnum',
                'NegativeKeywordSharedSetBase' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetBase',
                'NegativeKeywordSharedSetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetGetItem',
                'NegativeKeywordSharedSetUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetUpdateItem',
                'NegativeKeywordSharedSetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\NegativeKeywordSharedSetAddItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetNegativeKeywordSharedSetsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetNegativeKeywordSharedSetsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddNegativeKeywordSharedSetsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddNegativeKeywordSharedSetsResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateNegativeKeywordSharedSetsRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateNegativeKeywordSharedSetsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteNegativeKeywordSharedSetsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteNegativeKeywordSharedSetsResponse',
            ]
        ]);
    }

    /**
     * get.
     *
     * @param Contract\GetNegativeKeywordSharedSetsRequest $parameters
     * @return Contract\GetNegativeKeywordSharedSetsResponse
     */
    public function get(Contract\GetNegativeKeywordSharedSetsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * add.
     *
     * @param Contract\AddNegativeKeywordSharedSetsRequest $parameters
     * @return Contract\AddNegativeKeywordSharedSetsResponse
     */
    public function add(Contract\AddNegativeKeywordSharedSetsRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateNegativeKeywordSharedSetsRequest $parameters
     * @return Contract\UpdateNegativeKeywordSharedSetsResponse
     */
    public function update(Contract\UpdateNegativeKeywordSharedSetsRequest $parameters)
    {
        return $this->invoke('update', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteNegativeKeywordSharedSetsRequest $parameters
     * @return Contract\DeleteNegativeKeywordSharedSetsResponse
     */
    public function delete(Contract\DeleteNegativeKeywordSharedSetsRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }


}

