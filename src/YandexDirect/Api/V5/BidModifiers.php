<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class BidModifiers extends V5SoapClient
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
        parent::__construct(self::ENDPOINT, $dispatcher, $user, array(
            'classmap' => array(
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
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'BidModifierTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierTypeEnum',
                'BidModifierToggleTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierToggleTypeEnum',
                'BidModifierLevelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierLevelEnum',
                'BidModifierFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierFieldEnum',
                'MobileAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentFieldEnum',
                'DemographicsAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentFieldEnum',
                'RetargetingAdjustmentFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentFieldEnum',
                'BidModifiersSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifiersSelectionCriteria',
                'BidModifierGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierGetItem',
                'MobileAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentGet',
                'DemographicsAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentGet',
                'RetargetingAdjustmentGet' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentGet',
                'BidModifierAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\BidModifierAddBase',
                'MobileAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAdjustmentAdd',
                'DemographicsAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DemographicsAdjustmentAdd',
                'RetargetingAdjustmentAdd' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingAdjustmentAdd',
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
                'ToggleResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ToggleBidModifiersResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddBidModifiersRequest $parameters
     * @return Contract\AddBidModifiersResponse
     */
    public function add(Contract\AddBidModifiersRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * set.
     *
     * @param Contract\SetBidModifiersRequest $parameters
     * @return Contract\SetBidModifiersResponse
     */
    public function set(Contract\SetBidModifiersRequest $parameters)
    {
        return $this->invoke('set', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetBidModifiersRequest $parameters
     * @return Contract\GetBidModifiersResponse
     */
    public function get(Contract\GetBidModifiersRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteBidModifiersRequest $parameters
     * @return Contract\DeleteBidModifiersResponse
     */
    public function delete(Contract\DeleteBidModifiersRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }

    /**
     * toggle.
     *
     * @param Contract\ToggleBidModifiersRequest $parameters
     * @return Contract\ToggleBidModifiersResponse
     */
    public function toggle(Contract\ToggleBidModifiersRequest $parameters)
    {
        return $this->invoke('toggle', array($parameters));
    }


}

