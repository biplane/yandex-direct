<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class Ads extends SoapClient
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
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAdResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAdResponse',
                'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdRequest',
                'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateAdResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAdResponse',
                'ArchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveAdRequest',
                'ArchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ArchiveAdResponse',
                'UnarchiveRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdRequest',
                'UnarchiveResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UnarchiveAdResponse',
                'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAdRequest',
                'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAdResponse',
                'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAdRequest',
                'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAdResponse',
                'ModerateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdRequest',
                'ModerateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ModerateAdResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddAdRequest $parameters
     * @return Contract\AddAdResponse
     */
    public function add(Contract\AddAdRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * update.
     *
     * @param Contract\UpdateAdRequest $parameters
     * @return Contract\UpdateAdResponse
     */
    public function update(Contract\UpdateAdRequest $parameters)
    {
        return $this->invoke('update', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetAdRequest $parameters
     * @return Contract\GetAdResponse
     */
    public function get(Contract\GetAdRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteAdRequest $parameters
     * @return Contract\DeleteAdResponse
     */
    public function delete(Contract\DeleteAdRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }

    /**
     * archive.
     *
     * @param Contract\ArchiveAdRequest $parameters
     * @return Contract\ArchiveAdResponse
     */
    public function archive(Contract\ArchiveAdRequest $parameters)
    {
        return $this->invoke('archive', array($parameters));
    }

    /**
     * unarchive.
     *
     * @param Contract\UnarchiveAdRequest $parameters
     * @return Contract\UnarchiveAdResponse
     */
    public function unarchive(Contract\UnarchiveAdRequest $parameters)
    {
        return $this->invoke('unarchive', array($parameters));
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendAdRequest $parameters
     * @return Contract\SuspendAdResponse
     */
    public function suspend(Contract\SuspendAdRequest $parameters)
    {
        return $this->invoke('suspend', array($parameters));
    }

    /**
     * resume.
     *
     * @param Contract\ResumeAdRequest $parameters
     * @return Contract\ResumeAdResponse
     */
    public function resume(Contract\ResumeAdRequest $parameters)
    {
        return $this->invoke('resume', array($parameters));
    }

    /**
     * moderate.
     *
     * @param Contract\ModerateAdRequest $parameters
     * @return Contract\ModerateAdResponse
     */
    public function moderate(Contract\ModerateAdRequest $parameters)
    {
        return $this->invoke('moderate', array($parameters));
    }


}

