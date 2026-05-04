<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\AddRequest;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\AddResponse;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\DeleteRequest;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\DeleteResponse;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\GetRequest;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\GetResponse;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\ResumeRequest;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\ResumeResponse;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SetBidsRequest;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SetBidsResponse;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SuspendRequest;
use Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SuspendResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class DynamicTextAdTargets extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/dynamictextadtargets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\AddRequest',
            'WebpageAddItem' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\WebpageAddItem',
            'WebpageCondition' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\WebpageCondition',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\GetRequest',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\General\AdTargetsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\GetResponse',
            'WebpageGetItem' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\WebpageGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\DeleteResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SuspendRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SuspendResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\ResumeRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\ResumeResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SetBidsRequest',
            'SetBidsItem' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SetBidsItem',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\DynamicTextAdTargets\SetBidsResponse',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\General\SetBidsActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
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
