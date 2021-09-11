<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class DynamicTextAdTargets extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/dynamictextadtargets?wsdl';

    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'StringConditionOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StringConditionOperatorEnum',
            'AttributionModelEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AttributionModelEnum',
            'ExceptionNotification' => 'Biplane\YandexDirect\Api\V5\Contract\ExceptionNotification',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'YesNoEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoEnum',
            'YesNoUnknownEnum' => 'Biplane\YandexDirect\Api\V5\Contract\YesNoUnknownEnum',
            'CurrencyEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CurrencyEnum',
            'ConditionTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionTypeEnum',
            'AdTargetStateSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetStateSelectionEnum',
            'AdTargetsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AdTargetsSelectionCriteria',
            'StateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StateEnum',
            'PriorityEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PriorityEnum',
            'PositionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\PositionEnum',
            'CountryCodeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CountryCodeEnum',
            'StatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusEnum',
            'StatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\StatusSelectionEnum',
            'ExtensionStatusSelectionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionStatusSelectionEnum',
            'ScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ScopeEnum',
            'AgeRangeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AgeRangeEnum',
            'GenderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\GenderEnum',
            'MobileOperatingSystemTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileOperatingSystemTypeEnum',
            'LangEnum' => 'Biplane\YandexDirect\Api\V5\Contract\LangEnum',
            'RepresentativeRoleEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RepresentativeRoleEnum',
            'OperationEnum' => 'Biplane\YandexDirect\Api\V5\Contract\OperationEnum',
            'ServingStatusEnum' => 'Biplane\YandexDirect\Api\V5\Contract\ServingStatusEnum',
            'Statistics' => 'Biplane\YandexDirect\Api\V5\Contract\Statistics',
            'IdsCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\IdsCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
            'ApiExceptionMessage' => 'Biplane\YandexDirect\Api\V5\Contract\ApiExceptionMessage',
            'ActionResultBase' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResultBase',
            'ActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ActionResult',
            'SetBidsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsActionResult',
            'MultiIdsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\MultiIdsActionResult',
            'ClientsActionResult' => 'Biplane\YandexDirect\Api\V5\Contract\ClientsActionResult',
            'ExtensionModeration' => 'Biplane\YandexDirect\Api\V5\Contract\ExtensionModeration',
            'SortOrderEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SortOrderEnum',
            'WebpageFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageFieldEnum',
            'WebpageConditionOperandEnum' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageConditionOperandEnum',
            'WebpageTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageTypeEnum',
            'WebpageAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageAddItem',
            'WebpageCondition' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageCondition',
            'WebpageGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\WebpageGetItem',
            'SetBidsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddDynamicTextAdTargetsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddDynamicTextAdTargetsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetDynamicTextAdTargetsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetDynamicTextAdTargetsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteDynamicTextAdTargetsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteDynamicTextAdTargetsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendDynamicTextAdTargetsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendDynamicTextAdTargetsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeDynamicTextAdTargetsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeDynamicTextAdTargetsResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsDynamicTextAdTargetsRequest',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsDynamicTextAdTargetsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * add.
     */
    public function add(Contract\AddDynamicTextAdTargetsRequest $parameters): Contract\AddDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * get.
     */
    public function get(Contract\GetDynamicTextAdTargetsRequest $parameters): Contract\GetDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * delete.
     */
    public function delete(Contract\DeleteDynamicTextAdTargetsRequest $parameters): Contract\DeleteDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * suspend.
     */
    public function suspend(Contract\SuspendDynamicTextAdTargetsRequest $parameters): Contract\SuspendDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * resume.
     */
    public function resume(Contract\ResumeDynamicTextAdTargetsRequest $parameters): Contract\ResumeDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * setBids.
     */
    public function setBids(Contract\SetBidsDynamicTextAdTargetsRequest $parameters): Contract\SetBidsDynamicTextAdTargetsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
