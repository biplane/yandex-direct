<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class BidModifiers extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/bidmodifiers?wsdl';

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
                'BidModifierTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierTypeEnum',
                'BidModifierToggleTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierToggleTypeEnum',
                'BidModifierLevelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierLevelEnum',
                'BidModifierFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierFieldEnum',
                'MobileAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentFieldEnum',
                'DesktopAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentFieldEnum',
                'TabletAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentFieldEnum',
                'DesktopOnlyAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentFieldEnum',
                'DemographicsAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentFieldEnum',
                'RetargetingAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentFieldEnum',
                'RegionalAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentFieldEnum',
                'VideoAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentFieldEnum',
                'SmartAdAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentFieldEnum',
                'SerpLayoutAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentFieldEnum',
                'OperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperatingSystemTypeEnum',
                'IncomeGradeAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentFieldEnum',
                'BidModifiersSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifiersSelectionCriteria',
                'BidModifierGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierGetItem',
                'MobileAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentGet',
                'DesktopAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentGet',
                'TabletAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentGet',
                'DesktopOnlyAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentGet',
                'DemographicsAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentGet',
                'IncomeGradeAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentGet',
                'RetargetingAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentGet',
                'RegionalAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentGet',
                'VideoAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentGet',
                'SmartAdAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentGet',
                'SerpLayoutAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentGet',
                'BidModifierAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierAddBase',
                'MobileAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentAdd',
                'DesktopAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopAdjustmentAdd',
                'TabletAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TabletAdjustmentAdd',
                'DesktopOnlyAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DesktopOnlyAdjustmentAdd',
                'DemographicsAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentAdd',
                'RetargetingAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentAdd',
                'RegionalAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RegionalAdjustmentAdd',
                'VideoAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\VideoAdjustmentAdd',
                'SmartAdAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdAdjustmentAdd',
                'SerpLayoutAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\SerpLayoutAdjustmentAdd',
                'IncomeGradeAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\IncomeGradeAdjustmentAdd',
                'BidModifierAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierAddItem',
                'ToggleResult' => 'Biplane\YandexDirect\Api\V5\Contract\ToggleResult',
                'BidModifierSetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierSetItem',
                'BidModifierToggleItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierToggleItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidModifiersRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetBidModifiersResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddBidModifiersRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddBidModifiersResponse',
                'SetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidModifiersRequest',
                'SetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidModifiersResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteBidModifiersRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteBidModifiersResponse',
                'ToggleRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ToggleBidModifiersRequest',
                'ToggleResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ToggleBidModifiersResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddBidModifiersRequest $parameters
     * @return Contract\AddBidModifiersResponse
     */
    public function add(Contract\AddBidModifiersRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * set.
     *
     * @param Contract\SetBidModifiersRequest $parameters
     * @return Contract\SetBidModifiersResponse
     */
    public function set(Contract\SetBidModifiersRequest $parameters)
    {
        return $this->invoke('set', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetBidModifiersRequest $parameters
     * @return Contract\GetBidModifiersResponse
     */
    public function get(Contract\GetBidModifiersRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteBidModifiersRequest $parameters
     * @return Contract\DeleteBidModifiersResponse
     */
    public function delete(Contract\DeleteBidModifiersRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }

    /**
     * toggle.
     *
     * @param Contract\ToggleBidModifiersRequest $parameters
     * @return Contract\ToggleBidModifiersResponse
     */
    public function toggle(Contract\ToggleBidModifiersRequest $parameters)
    {
        return $this->invoke('toggle', [$parameters]);
    }


}

