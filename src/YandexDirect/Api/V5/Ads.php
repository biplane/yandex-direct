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
                'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
                'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
                'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
                'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
                'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
                'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
                'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
                'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
                'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
                'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
                'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
                'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
                'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
                'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
                'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
                'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
                'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
                'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
                'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
                'AdCategoryEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdCategoryEnum',
                'AgeLabelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeLabelEnum',
                'AdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdFieldEnum',
                'TextAdFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdFieldEnum',
                'AdTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTypeEnum',
                'AdAddItemBase' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItemBase',
                'TextAdAddBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAddBase',
                'AdAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdAddItem',
                'TextAdAdd' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdAdd',
                'AdUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdUpdateItem',
                'TextAdUpdateBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdateBase',
                'TextAdUpdate' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdUpdate',
                'AdsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdsSelectionCriteria',
                'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
                'TextAdGetBase' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGetBase',
                'AdGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdGetItem',
                'TextAdGet' => 'Biplane\YandexDirect\Api\V5\Contract\TextAdGet',
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

