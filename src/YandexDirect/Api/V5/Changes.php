<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Changes extends SoapClient
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/changes?wsdl';

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
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'CheckDictionariesRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesRequest',
                'CheckDictionariesResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesResponse',
                'CheckCampaignsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsRequest',
                'CampaignChangesItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignChangesItem',
                'CampaignChangesInEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignChangesInEnum',
                'CheckCampaignsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsResponse',
                'CheckRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckChangeRequest',
                'CheckFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CheckFieldEnum',
                'CheckResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckChangeResponse',
                'CheckResponseModified' => 'Biplane\YandexDirect\Api\V5\Contract\CheckResponseModified',
                'CampaignStatItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatItem',
                'CheckResponseIds' => 'Biplane\YandexDirect\Api\V5\Contract\CheckResponseIds'
            )
        ));
    }

    /**
     * checkDictionaries.
     *
     * @param Contract\CheckDictionariesRequest $parameters
     * @return Contract\CheckDictionariesResponse
     */
    public function checkDictionaries(Contract\CheckDictionariesRequest $parameters)
    {
        return $this->invoke('checkDictionaries', array($parameters));
    }

    /**
     * checkCampaigns.
     *
     * @param Contract\CheckCampaignsRequest $parameters
     * @return Contract\CheckCampaignsResponse
     */
    public function checkCampaigns(Contract\CheckCampaignsRequest $parameters)
    {
        return $this->invoke('checkCampaigns', array($parameters));
    }

    /**
     * check.
     *
     * @param Contract\CheckChangeRequest $parameters
     * @return Contract\CheckChangeResponse
     */
    public function check(Contract\CheckChangeRequest $parameters)
    {
        return $this->invoke('check', array($parameters));
    }


}

