<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddAudienceTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddAudienceTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAudienceTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteAudienceTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetAudienceTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetAudienceTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeAudienceTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeAudienceTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsAudienceTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsAudienceTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendAudienceTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendAudienceTargetsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class AudienceTargets extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/audiencetargets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAudienceTargetsRequest',
            'AudienceTargetSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAudienceTargetsResponse',
            'AudienceTargetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetGetItem',
            'AudienceTargetBase' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetBase',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAudienceTargetsRequest',
            'AudienceTargetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetAddItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAudienceTargetsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAudienceTargetsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAudienceTargetsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAudienceTargetsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAudienceTargetsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAudienceTargetsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAudienceTargetsResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsAudienceTargetsRequest',
            'AudienceTargetSetBidsItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetSetBidsItem',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsAudienceTargetsResponse',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetAudienceTargetsRequest $parameters): GetAudienceTargetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: add
     */
    public function add(AddAudienceTargetsRequest $parameters): AddAudienceTargetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteAudienceTargetsRequest $parameters): DeleteAudienceTargetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendAudienceTargetsRequest $parameters): SuspendAudienceTargetsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeAudienceTargetsRequest $parameters): ResumeAudienceTargetsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: setBids
     */
    public function setBids(SetBidsAudienceTargetsRequest $parameters): SetBidsAudienceTargetsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
