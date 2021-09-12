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
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/audiencetargets?wsdl';

    /**
     * @param array<string, mixed> $options
     */
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
            'AudienceTargetStateEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetStateEnum',
            'AudienceTargetFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetFieldEnum',
            'AudienceTargetSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetSelectionCriteria',
            'AudienceTargetBase' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetBase',
            'AudienceTargetAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetAddItem',
            'AudienceTargetGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetGetItem',
            'AudienceTargetSetBidsItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceTargetSetBidsItem',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetAudienceTargetsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetAudienceTargetsResponse',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddAudienceTargetsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddAudienceTargetsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAudienceTargetsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteAudienceTargetsResponse',
            'SuspendRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAudienceTargetsRequest',
            'SuspendResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SuspendAudienceTargetsResponse',
            'ResumeRequest' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAudienceTargetsRequest',
            'ResumeResponse' => 'Biplane\YandexDirect\Api\V5\Contract\ResumeAudienceTargetsResponse',
            'SetBidsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsAudienceTargetsRequest',
            'SetBidsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\SetBidsAudienceTargetsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function get(GetAudienceTargetsRequest $parameters): GetAudienceTargetsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function add(AddAudienceTargetsRequest $parameters): AddAudienceTargetsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function delete(DeleteAudienceTargetsRequest $parameters): DeleteAudienceTargetsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    public function suspend(SuspendAudienceTargetsRequest $parameters): SuspendAudienceTargetsResponse
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    public function resume(ResumeAudienceTargetsRequest $parameters): ResumeAudienceTargetsResponse
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    public function setBids(SetBidsAudienceTargetsRequest $parameters): SetBidsAudienceTargetsResponse
    {
        return $this->__soapCall('setBids', [$parameters]);
    }
}
