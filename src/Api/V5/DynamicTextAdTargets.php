<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddDynamicTextAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddDynamicTextAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteDynamicTextAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteDynamicTextAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetDynamicTextAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetDynamicTextAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\ResumeDynamicTextAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\ResumeDynamicTextAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsDynamicTextAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SetBidsDynamicTextAdTargetsResponse;
use Biplane\YandexDirect\Api\V5\Contract\SuspendDynamicTextAdTargetsRequest;
use Biplane\YandexDirect\Api\V5\Contract\SuspendDynamicTextAdTargetsResponse;
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
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddDynamicTextAdTargetsRequest',
            'WebpageAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageAddItem',
            'WebpageCondition' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageCondition',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddDynamicTextAdTargetsResponse',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetDynamicTextAdTargetsRequest',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetDynamicTextAdTargetsResponse',
            'WebpageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteDynamicTextAdTargetsRequest',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteDynamicTextAdTargetsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendDynamicTextAdTargetsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendDynamicTextAdTargetsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeDynamicTextAdTargetsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeDynamicTextAdTargetsResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsDynamicTextAdTargetsRequest',
            'SetBidsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsItem',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsDynamicTextAdTargetsResponse',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: add
     */
    public function add(AddDynamicTextAdTargetsRequest $parameters): AddDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * Calls operation: get
     */
    public function get(GetDynamicTextAdTargetsRequest $parameters): GetDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: delete
     */
    public function delete(DeleteDynamicTextAdTargetsRequest $parameters): DeleteDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * Calls operation: suspend
     */
    public function suspend(SuspendDynamicTextAdTargetsRequest $parameters): SuspendDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * Calls operation: resume
     */
    public function resume(ResumeDynamicTextAdTargetsRequest $parameters): ResumeDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * Calls operation: setBids
     */
    public function setBids(SetBidsDynamicTextAdTargetsRequest $parameters): SetBidsDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
