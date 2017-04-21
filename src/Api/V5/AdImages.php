<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class AdImages extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/adimages?wsdl';

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
                'AdImageFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageFieldEnum',
                'AdImageTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageTypeEnum',
                'AdImageSubtypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageSubtypeEnum',
                'AdImageAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageAddItem',
                'AdImageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageGetItem',
                'AdImageSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageSelectionCriteria',
                'AdImageHashesCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageHashesCriteria',
                'AdImageActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\AdImageActionResult',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdImagesRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdImagesResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdImagesRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdImagesResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdImagesResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddAdImagesRequest $parameters
     * @return Contract\AddAdImagesResponse
     */
    public function add(Contract\AddAdImagesRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetAdImagesRequest $parameters
     * @return Contract\GetAdImagesResponse
     */
    public function get(Contract\GetAdImagesRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteAdImagesRequest $parameters
     * @return Contract\DeleteAdImagesResponse
     */
    public function delete(Contract\DeleteAdImagesRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }


}

