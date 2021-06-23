<?php

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class SmartAdTargets extends ApiSoapClientV5
{

    const ENDPOINT = 'https://api.direct.yandex.com/v5/smartadtargets?wsdl';

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

    /**
     * add.
     *
     * @param Contract\AddSmartAdTargetsRequest $parameters
     * @return Contract\AddSmartAdTargetsResponse
     */
    public function add(Contract\AddSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('add', [$parameters]);
    }

    /**
     * get.
     *
     * @param Contract\GetSmartAdTargetsRequest $parameters
     * @return Contract\GetSmartAdTargetsResponse
     */
    public function get(Contract\GetSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * update.
     *
     * @param Contract\UpdateSmartAdTargetsRequest $parameters
     * @return Contract\UpdateSmartAdTargetsResponse
     */
    public function update(Contract\UpdateSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('update', [$parameters]);
    }

    /**
     * delete.
     *
     * @param Contract\DeleteSmartAdTargetsRequest $parameters
     * @return Contract\DeleteSmartAdTargetsResponse
     */
    public function delete(Contract\DeleteSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('delete', [$parameters]);
    }

    /**
     * suspend.
     *
     * @param Contract\SuspendSmartAdTargetsRequest $parameters
     * @return Contract\SuspendSmartAdTargetsResponse
     */
    public function suspend(Contract\SuspendSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('suspend', [$parameters]);
    }

    /**
     * resume.
     *
     * @param Contract\ResumeSmartAdTargetsRequest $parameters
     * @return Contract\ResumeSmartAdTargetsResponse
     */
    public function resume(Contract\ResumeSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('resume', [$parameters]);
    }

    /**
     * setBids.
     *
     * @param Contract\SetBidsSmartAdTargetsRequest $parameters
     * @return Contract\SetBidsSmartAdTargetsResponse
     */
    public function setBids(Contract\SetBidsSmartAdTargetsRequest $parameters)
    {
        return $this->__soapCall('setBids', [$parameters]);
    }


}

