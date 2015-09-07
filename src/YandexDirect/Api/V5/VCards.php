<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\SoapClient;
use Biplane\YandexDirect\User;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Auto-generated code.
 */
class VCards extends SoapClient
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/vcards?wsdl';

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
                'VCardFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\VCardFieldEnum',
                'Phone' => 'Biplane\YandexDirect\Api\V5\Contract\Phone',
                'InstantMessenger' => 'Biplane\YandexDirect\Api\V5\Contract\InstantMessenger',
                'MapPoint' => 'Biplane\YandexDirect\Api\V5\Contract\MapPoint',
                'VCardAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardAddItem',
                'VCardGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\VCardGetItem',
                'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordRequest',
                'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetKeywordResponse',
                'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordRequest',
                'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddKeywordResponse',
                'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordRequest',
                'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteKeywordResponse'
            )
        ));
    }

    /**
     * add.
     *
     * @param Contract\AddKeywordRequest $parameters
     * @return Contract\AddKeywordResponse
     */
    public function add(Contract\AddKeywordRequest $parameters)
    {
        return $this->invoke('add', array($parameters));
    }

    /**
     * get.
     *
     * @param Contract\GetKeywordRequest $parameters
     * @return Contract\GetKeywordResponse
     */
    public function get(Contract\GetKeywordRequest $parameters)
    {
        return $this->invoke('get', array($parameters));
    }

    /**
     * delete.
     *
     * @param Contract\DeleteKeywordRequest $parameters
     * @return Contract\DeleteKeywordResponse
     */
    public function delete(Contract\DeleteKeywordRequest $parameters)
    {
        return $this->invoke('delete', array($parameters));
    }


}

