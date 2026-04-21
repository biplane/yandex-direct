<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddSmartAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteSmartAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetSmartAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeSmartAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsSmartAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendSmartAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateSmartAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateSmartAdTargetsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class SmartAdTargets extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v501/smartadtargets?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddSmartAdTargetsRequest',
            'SmartAdTargetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetAddItem',
            'ConditionsArray' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionsArray',
            'ConditionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionsItem',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddSmartAdTargetsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetSmartAdTargetsRequest',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetSmartAdTargetsResponse',
            'SmartAdTargetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateSmartAdTargetsRequest',
            'SmartAdTargetUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetUpdateItem',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateSmartAdTargetsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSmartAdTargetsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSmartAdTargetsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendSmartAdTargetsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendSmartAdTargetsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeSmartAdTargetsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeSmartAdTargetsResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsSmartAdTargetsRequest',
            'SetBidsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetSetBidsItem',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsSmartAdTargetsResponse',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
        ];
        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddSmartAdTargetsRequest $parameters): AddSmartAdTargetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetSmartAdTargetsRequest $parameters): GetSmartAdTargetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: update
     */
    public function update(UpdateSmartAdTargetsRequest $parameters): UpdateSmartAdTargetsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteSmartAdTargetsRequest $parameters): DeleteSmartAdTargetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendSmartAdTargetsRequest $parameters): SuspendSmartAdTargetsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeSmartAdTargetsRequest $parameters): ResumeSmartAdTargetsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: setBids
     */
    public function setBids(SetBidsSmartAdTargetsRequest $parameters): SetBidsSmartAdTargetsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
