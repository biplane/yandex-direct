<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\AddRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\AddResponse;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\DeleteRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\DeleteResponse;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\GetRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\GetResponse;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\ResumeRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\ResumeResponse;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\SetBidsRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\SetBidsResponse;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\SuspendRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\SuspendResponse;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\UpdateRequest;
use Biplane\YandexDirect\Api\V5\SmartAdTargets\UpdateResponse;
use Biplane\YandexDirect\Config;
use Biplane\YandexDirect\Exception\ApiException;
use SoapFault;

/**
 * Auto-generated code.
 */
class SmartAdTargets extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/smartadtargets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\AddRequest',
            'SmartAdTargetAddItem' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SmartAdTargetAddItem',
            'ConditionsArray' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\ConditionsArray',
            'ConditionsItem' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\ConditionsItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\AddResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\General\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\General\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\General\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\GetRequest',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\General\AdTargetsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\GetResponse',
            'SmartAdTargetGetItem' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SmartAdTargetGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\UpdateRequest',
            'SmartAdTargetUpdateItem' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SmartAdTargetUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\UpdateResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\DeleteRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\General\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\DeleteResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SuspendRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SuspendResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\ResumeRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\ResumeResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SetBidsRequest',
            'SetBidsItem' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SetBidsItem',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\SmartAdTargets\SetBidsResponse',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\General\SetBidsActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function add(AddRequest $parameters): AddResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function get(GetRequest $parameters): GetResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: update
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function update(UpdateRequest $parameters): UpdateResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function delete(DeleteRequest $parameters): DeleteResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: suspend
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function suspend(SuspendRequest $parameters): SuspendResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function resume(ResumeRequest $parameters): ResumeResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: setBids
     *
     * @throws ApiException
     * @throws SoapFault
     */
    public function setBids(SetBidsRequest $parameters): SetBidsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
