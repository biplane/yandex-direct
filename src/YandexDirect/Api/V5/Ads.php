<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Biplane\YandexDirect\Api\V5SoapClient;

/**
 * Auto-generated code.
 */
class Ads extends V5SoapClient
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
                'AdCategoryEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdCategoryEnum',
                'AgeLabelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum',
                'MobAppAgeLabelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobAppAgeLabelEnum',
                'AdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdFieldEnum',
                'TextAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdFieldEnum',
                'MobileAppAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFieldEnum',
                'AdTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum',
                'MobileAppFeatureEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppFeatureEnum',
                'MobileAppAdFeatureItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFeatureItem',
                'MobileAppAdFeatureGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdFeatureGetItem',
                'MobileAppAdBase' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdBase',
                'AdAddItemBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItemBase',
                'TextAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAddBase',
                'AdAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItem',
                'TextAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAdd',
                'MobileAppAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdAdd',
                'AdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdUpdateItem',
                'TextAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdateBase',
                'TextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdate',
                'MobileAppAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdUpdate',
                'AdsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdsSelectionCriteria',
                'TextAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGetBase',
                'TextAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGet',
                'MobileAppAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdGet',
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
                'ModerateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdsResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddAdsRequest $parameters
     * @return Contract\AddAdsResponse
     */
    public function add(Contract\AddAdsRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * update.
     *
     * @param Contract\UpdateAdsRequest $parameters
     * @return Contract\UpdateAdsResponse
     */
    public function update(Contract\UpdateAdsRequest $parameters)
    {
        return $this->invoke('update', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetAdsRequest $parameters
     * @return Contract\GetAdsResponse
     */
    public function get(Contract\GetAdsRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteAdsRequest $parameters
     * @return Contract\DeleteAdsResponse
     */
    public function delete(Contract\DeleteAdsRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }

    /**
     * archive.
     *
     * @param Contract\ArchiveAdsRequest $parameters
     * @return Contract\ArchiveAdsResponse
     */
    public function archive(Contract\ArchiveAdsRequest $parameters)
    {
        return $this->invoke('archive', array($parameters));
    }

    /**
     * unarchive.
     *
     * @param Contract\UnarchiveAdsRequest $parameters
     * @return Contract\UnarchiveAdsResponse
     */
    public function unarchive(Contract\UnarchiveAdsRequest $parameters)
    {
        return $this->invoke('unarchive', array($parameters));
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendAdsRequest $parameters
     * @return Contract\SuspendAdsResponse
     */
    public function suspend(Contract\SuspendAdsRequest $parameters)
    {
        return $this->invoke('suspend', array($parameters));
    }

    /**
     * resume.
     *
     * @param Contract\ResumeAdsRequest $parameters
     * @return Contract\ResumeAdsResponse
     */
    public function resume(Contract\ResumeAdsRequest $parameters)
    {
        return $this->invoke('resume', array($parameters));
    }

    /**
     * moderate.
     *
     * @param Contract\ModerateAdsRequest $parameters
     * @return Contract\ModerateAdsResponse
     */
    public function moderate(Contract\ModerateAdsRequest $parameters)
    {
        return $this->invoke('moderate', array($parameters));
    }


}

