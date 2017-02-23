<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Clients extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/clients?wsdl';

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
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
                'ClientFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientFieldEnum',
                'ClientRestrictionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionEnum',
                'ClientSettingGetEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingGetEnum',
                'PrivilegeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PrivilegeEnum',
                'EmailSubscriptionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSubscriptionEnum',
                'EmailSubscriptionItem' => 'Biplane\YandexDirect\Api\V5\Contract\EmailSubscriptionItem',
                'Notification' => 'Biplane\YandexDirect\Api\V5\Contract\Notification',
                'ClientRestrictionItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientRestrictionItem',
                'ClientSettingItemGet' => 'Biplane\YandexDirect\Api\V5\Contract\ClientSettingItemGet',
                'Grant' => 'Biplane\YandexDirect\Api\V5\Contract\Grant',
                'Representative' => 'Biplane\YandexDirect\Api\V5\Contract\Representative',
                'ClientBaseItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientBaseItem',
                'ClientGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\ClientGetItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetClientsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetClientsResponse',
            ]
        ]);
    }

    /**
     * get.
     *
     * @param Contract\GetClientsRequest $parameters
     * @return Contract\GetClientsResponse
     */
    public function get(Contract\GetClientsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }


}

