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
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/smartadtargets?wsdl';

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'MobileAppAdActionEnum' => 'Biplane\YandexDirect\Api\V5\Contract\MobileAppAdActionEnum',
            'AdGroupTypesEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AdGroupTypesEnum',
            'StringConditionOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetStringConditionOperatorEnum',
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
            'SmartAdTargetFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetFieldEnum',
            'AudienceEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceEnum',
            'ConditionsArray' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionsArray',
            'ConditionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ConditionsItem',
            'SmartAdTargetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetAddItem',
            'SmartAdTargetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetGetItem',
            'SmartAdTargetUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetUpdateItem',
            'SetBidsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SmartAdTargetSetBidsItem',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddSmartAdTargetsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddSmartAdTargetsResponse',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetSmartAdTargetsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetSmartAdTargetsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateSmartAdTargetsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateSmartAdTargetsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSmartAdTargetsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteSmartAdTargetsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendSmartAdTargetsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendSmartAdTargetsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeSmartAdTargetsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeSmartAdTargetsResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsSmartAdTargetsRequest',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsSmartAdTargetsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function add(AddSmartAdTargetsRequest $parameters): AddSmartAdTargetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function get(GetSmartAdTargetsRequest $parameters): GetSmartAdTargetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function update(UpdateSmartAdTargetsRequest $parameters): UpdateSmartAdTargetsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    public function delete(DeleteSmartAdTargetsRequest $parameters): DeleteSmartAdTargetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    public function suspend(SuspendSmartAdTargetsRequest $parameters): SuspendSmartAdTargetsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    public function resume(ResumeSmartAdTargetsRequest $parameters): ResumeSmartAdTargetsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    public function setBids(SetBidsSmartAdTargetsRequest $parameters): SetBidsSmartAdTargetsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
