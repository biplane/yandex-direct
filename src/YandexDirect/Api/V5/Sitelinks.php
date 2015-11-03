<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class Sitelinks extends V5SoapClient
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
                'SitelinksSetFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetFieldEnum',
                'SitelinksSetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetAddItem',
                'SitelinksSetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SitelinksSetGetItem',
                'Sitelink' => 'Biplane\YandexDirect\Api\V5\Contract\Sitelink',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetSitelinksResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddSitelinksResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSitelinksResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddSitelinksRequest $parameters
     * @return Contract\AddSitelinksResponse
     */
    public function add(Contract\AddSitelinksRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetSitelinksRequest $parameters
     * @return Contract\GetSitelinksResponse
     */
    public function get(Contract\GetSitelinksRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteSitelinksRequest $parameters
     * @return Contract\DeleteSitelinksResponse
     */
    public function delete(Contract\DeleteSitelinksRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }


}

