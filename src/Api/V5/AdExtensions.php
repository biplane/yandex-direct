<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class AdExtensions extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/adextensions?wsdl';

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
                'AdExtensionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum',
                'AdExtensionStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionStateSelectionEnum',
                'AdExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionStatusSelectionEnum',
                'Callout' => 'Biplane\YandexDirect\Api\V5\Contract\Callout',
                'AdExtensionBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionBase',
                'AdExtension' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtension',
                'AdExtensionSettingItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionSettingItem',
                'AdExtensionSetting' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionSetting',
                'AdExtensionFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionFieldEnum',
                'CalloutFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CalloutFieldEnum',
                'AdExtensionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionGetItem',
                'AdExtensionAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionAddItem',
                'AdExtensionsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionsSelectionCriteria',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdExtensionsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdExtensionsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdExtensionsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdExtensionsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdExtensionsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdExtensionsResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddAdExtensionsRequest $parameters
     * @return Contract\AddAdExtensionsResponse
     */
    public function add(Contract\AddAdExtensionsRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetAdExtensionsRequest $parameters
     * @return Contract\GetAdExtensionsResponse
     */
    public function get(Contract\GetAdExtensionsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteAdExtensionsRequest $parameters
     * @return Contract\DeleteAdExtensionsResponse
     */
    public function delete(Contract\DeleteAdExtensionsRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }


}

