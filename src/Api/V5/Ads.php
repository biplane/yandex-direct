<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClientV5;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Ads extends SoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/ads?wsdl';

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
                'AdExtensionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionTypeEnum',
                'AdExtensionStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionStateSelectionEnum',
                'AdExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionStatusSelectionEnum',
                'Callout' => 'Biplane\YandexDirect\Api\V5\Contract\Callout',
                'AdExtensionBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionBase',
                'AdExtension' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtension',
                'AdExtensionSettingItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionSettingItem',
                'AdExtensionSetting' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionSetting',
                'AdCategoryEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdCategoryEnum',
                'AgeLabelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum',
                'MobAppAgeLabelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobAppAgeLabelEnum',
                'AdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdFieldEnum',
                'AdStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdStateSelectionEnum',
                'AdStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdStatusSelectionEnum',
                'TextAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdFieldEnum',
                'DynamicTextAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdFieldEnum',
                'MobileAppAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFieldEnum',
                'TextImageAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdFieldEnum',
                'MobileAppImageAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdFieldEnum',
                'AdTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum',
                'AdSubtypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdSubtypeEnum',
                'MobileAppFeatureEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppFeatureEnum',
                'AdExtensionAdGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdExtensionAdGetItem',
                'MobileAppAdFeatureItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFeatureItem',
                'MobileAppAdFeatureGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFeatureGetItem',
                'MobileAppAdBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdBase',
                'AdAddItemBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItemBase',
                'TextAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAddBase',
                'AdAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItem',
                'TextAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAdd',
                'DynamicTextAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdAdd',
                'MobileAppAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdAdd',
                'ImageAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\ImageAdAddBase',
                'TextImageAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdAdd',
                'MobileAppImageAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdAdd',
                'AdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdUpdateItem',
                'TextAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdateBase',
                'TextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdate',
                'DynamicTextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdUpdate',
                'MobileAppAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdUpdate',
                'ImageAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\ImageAdUpdateBase',
                'TextImageAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdUpdate',
                'MobileAppImageAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdUpdate',
                'AdsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdsSelectionCriteria',
                'TextAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGetBase',
                'TextAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGet',
                'DynamicTextAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\DynamicTextAdGet',
                'MobileAppAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGet',
                'ImageAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\ImageAdGetBase',
                'TextImageAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextImageAdGet',
                'MobileAppImageAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppImageAdGet',
                'AdGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGetItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdsRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdsResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdsRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdsResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdsRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdsResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdsRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdsResponse',
                'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveAdsRequest',
                'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveAdsResponse',
                'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdsRequest',
                'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdsResponse',
                'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAdsRequest',
                'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAdsResponse',
                'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAdsRequest',
                'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAdsResponse',
                'ModerateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdsRequest',
                'ModerateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdsResponse',
            ]
        ]);
    }

    /**
     * add.
     *
     * @param Contract\AddAdsRequest $parameters
     * @return Contract\AddAdsResponse
     */
    public function add(Contract\AddAdsRequest $parameters)
    {
        return $this->invoke('add', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateAdsRequest $parameters
     * @return Contract\UpdateAdsResponse
     */
    public function update(Contract\UpdateAdsRequest $parameters)
    {
        return $this->invoke('update', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetAdsRequest $parameters
     * @return Contract\GetAdsResponse
     */
    public function get(Contract\GetAdsRequest $parameters)
    {
        return $this->invoke('get', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteAdsRequest $parameters
     * @return Contract\DeleteAdsResponse
     */
    public function delete(Contract\DeleteAdsRequest $parameters)
    {
        return $this->invoke('delete', [$parameters]);
    }

    /**
     * archive.
     *
     * @param Contract\ArchiveAdsRequest $parameters
     * @return Contract\ArchiveAdsResponse
     */
    public function archive(Contract\ArchiveAdsRequest $parameters)
    {
        return $this->invoke('archive', [$parameters]);
    }

    /**
     * unarchive.
     *
     * @param Contract\UnarchiveAdsRequest $parameters
     * @return Contract\UnarchiveAdsResponse
     */
    public function unarchive(Contract\UnarchiveAdsRequest $parameters)
    {
        return $this->invoke('unarchive', [$parameters]);
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendAdsRequest $parameters
     * @return Contract\SuspendAdsResponse
     */
    public function suspend(Contract\SuspendAdsRequest $parameters)
    {
        return $this->invoke('suspend', [$parameters]);
    }

    /**
     * resume.
     *
     * @param Contract\ResumeAdsRequest $parameters
     * @return Contract\ResumeAdsResponse
     */
    public function resume(Contract\ResumeAdsRequest $parameters)
    {
        return $this->invoke('resume', [$parameters]);
    }

    /**
     * moderate.
     *
     * @param Contract\ModerateAdsRequest $parameters
     * @return Contract\ModerateAdsResponse
     */
    public function moderate(Contract\ModerateAdsRequest $parameters)
    {
        return $this->invoke('moderate', [$parameters]);
    }


}

