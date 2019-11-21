<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Sitelinks extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/sitelinks?wsdl';

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
                'SitelinksSetFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetFieldEnum',
                'SitelinkAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkAddItem',
                'SitelinkGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkGetItem',
                'SitelinksSetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetAddItem',
                'SitelinksSetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetGetItem',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksResponse',
                'SitelinkFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinkFieldEnum',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddSitelinksRequest $parameters
     * @return Contract\AddSitelinksResponse
     */
    public function add(Contract\AddSitelinksRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetSitelinksRequest $parameters
     * @return Contract\GetSitelinksResponse
     */
    public function get(Contract\GetSitelinksRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteSitelinksRequest $parameters
     * @return Contract\DeleteSitelinksResponse
     */
    public function delete(Contract\DeleteSitelinksRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }


}

