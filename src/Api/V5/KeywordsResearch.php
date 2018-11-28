<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class KeywordsResearch extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/keywordsresearch?wsdl';

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
                'HasSearchVolumeFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeFieldEnum',
                'HasSearchVolumeItem' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeItem',
                'HasSearchVolumeSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeSelectionCriteria',
                'HasSearchVolumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeKeywordsRequest',
                'HasSearchVolumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\HasSearchVolumeKeywordsResponse',
                'DeduplicateRequestItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateRequestItem',
                'DeduplicateOperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateOperationEnum',
                'DeduplicateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateRequest',
                'DeduplicateErrorItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateErrorItem',
                'DeduplicateResponseAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponseAddItem',
                'DeduplicateResponseUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponseUpdateItem',
                'DeduplicateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeduplicateResponse',
            ]
        ]);
    }

    /**
     * hasSearchVolume.
     *
     * @param Contract\HasSearchVolumeKeywordsRequest $parameters
     * @return Contract\HasSearchVolumeKeywordsResponse
     */
    public function hasSearchVolume(Contract\HasSearchVolumeKeywordsRequest $parameters)
    {
        return $this->invoke('hasSearchVolume', [$parameters]);
    }

    /**
     * deduplicate.
     *
     * @param Contract\DeduplicateRequest $parameters
     * @return Contract\DeduplicateResponse
     */
    public function deduplicate(Contract\DeduplicateRequest $parameters)
    {
        return $this->invoke('deduplicate', [$parameters]);
    }


}

