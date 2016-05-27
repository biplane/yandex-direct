<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\V5SoapClient;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Dictionaries extends V5SoapClient
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/dictionaries?wsdl';

    /**
     * Constructor.
     *
     * @param EventDispatcherInterface $dispatcher
     * @param User $user
     */
    public function __construct(EventDispatcherInterface $dispatcher, User $user)
    {
        parent::__construct($user->resolveWsdl(self::ENDPOINT), $dispatcher, $user, array(
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
                'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
                'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'DictionaryNameEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DictionaryNameEnum',
                'CurrenciesItem' => 'Biplane\YandexDirect\Api\V5\Contract\CurrenciesItem',
                'MetroStationsItem' => 'Biplane\YandexDirect\Api\V5\Contract\MetroStationsItem',
                'GeoRegionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\GeoRegionsItem',
                'TimeZonesItem' => 'Biplane\YandexDirect\Api\V5\Contract\TimeZonesItem',
                'ConstantsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ConstantsItem',
                'AdCategoriesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdCategoriesItem',
                'OperationSystemVersionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\OperationSystemVersionsItem',
                'ProductivityAssertionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ProductivityAssertionsItem',
                'SupplySidePlatformsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SupplySidePlatformsItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetDictionariesRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetDictionariesResponse'
            )
        ));
    }

    /**
     * get.
     *
     * @param Contract\GetDictionariesRequest $parameters
     * @return Contract\GetDictionariesResponse
     */
    public function get(Contract\GetDictionariesRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }


}

