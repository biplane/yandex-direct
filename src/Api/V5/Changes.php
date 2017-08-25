<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Changes extends SoapClientV5
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
                'CheckDictionariesRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesRequest',
                'CheckDictionariesResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckDictionariesResponse',
                'CheckCampaignsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsRequest',
                'CampaignChangesItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignChangesItem',
                'CampaignChangesInEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignChangesInEnum',
                'CheckCampaignsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckCampaignsResponse',
                'CheckRequest' => 'Biplane\YandexDirect\Api\V5\Contract\CheckChangesRequest',
                'CheckFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CheckFieldEnum',
                'CheckResponse' => 'Biplane\YandexDirect\Api\V5\Contract\CheckChangesResponse',
                'CheckResponseModified' => 'Biplane\YandexDirect\Api\V5\Contract\CheckResponseModified',
                'CampaignStatItem' => 'Biplane\YandexDirect\Api\V5\Contract\CampaignStatItem',
                'CheckResponseIds' => 'Biplane\YandexDirect\Api\V5\Contract\CheckResponseIds',
            ]
        ]);
    }

    /**
     * checkDictionaries.
     *
     * @param Contract\CheckDictionariesRequest $parameters
     * @return Contract\CheckDictionariesResponse
     */
    public function checkDictionaries(Contract\CheckDictionariesRequest $parameters)
    {
        return $this->invoke('checkDictionaries', [$parameters]);
    }

    /**
     * checkCampaigns.
     *
     * @param Contract\CheckCampaignsRequest $parameters
     * @return Contract\CheckCampaignsResponse
     */
    public function checkCampaigns(Contract\CheckCampaignsRequest $parameters)
    {
        return $this->invoke('checkCampaigns', [$parameters]);
    }

    /**
     * check.
     *
     * @param Contract\CheckChangesRequest $parameters
     * @return Contract\CheckChangesResponse
     */
    public function check(Contract\CheckChangesRequest $parameters)
    {
        return $this->invoke('check', [$parameters]);
    }


}

