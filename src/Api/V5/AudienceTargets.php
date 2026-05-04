<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\AudienceTargets\AddRequest;
use Biplane\YandexDirect\Api\V5\AudienceTargets\AddResponse;
use Biplane\YandexDirect\Api\V5\AudienceTargets\DeleteRequest;
use Biplane\YandexDirect\Api\V5\AudienceTargets\DeleteResponse;
use Biplane\YandexDirect\Api\V5\AudienceTargets\GetRequest;
use Biplane\YandexDirect\Api\V5\AudienceTargets\GetResponse;
use Biplane\YandexDirect\Api\V5\AudienceTargets\ResumeRequest;
use Biplane\YandexDirect\Api\V5\AudienceTargets\ResumeResponse;
use Biplane\YandexDirect\Api\V5\AudienceTargets\SetBidsRequest;
use Biplane\YandexDirect\Api\V5\AudienceTargets\SetBidsResponse;
use Biplane\YandexDirect\Api\V5\AudienceTargets\SuspendRequest;
use Biplane\YandexDirect\Api\V5\AudienceTargets\SuspendResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AudienceTargets extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/audiencetargets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\GetRequest',
            'AudienceTargetSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\GetResponse',
            'AudienceTargetGetItem' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetGetItem',
            'AudienceTargetBase' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AddRequest',
            'AudienceTargetAddItem' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\DeleteResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\SuspendRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\SuspendResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\ResumeRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\ResumeResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\SetBidsRequest',
            'AudienceTargetSetBidsItem' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\AudienceTargetSetBidsItem',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\AudienceTargets\SetBidsResponse',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\General\SetBidsActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendRequest $parameters): SuspendResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeRequest $parameters): ResumeResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: setBids
     */
    public function setBids(SetBidsRequest $parameters): SetBidsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
