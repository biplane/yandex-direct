<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsResponse;
use Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsResponse;
use Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsRequest;
use Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class RetargetingLists extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/retargetinglists?wsdl';

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
            'RetargetingListFieldEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListFieldEnum',
            'RetargetingListScopeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListScopeEnum',
            'RetargetingListRuleOperatorEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleOperatorEnum',
            'RetargetingListTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListTypeEnum',
            'AvailableForTargetsInAdGroupTypesArray' => 'Biplane\YandexDirect\Api\V5\Contract\AvailableForTargetsInAdGroupTypesArray',
            'RetargetingListSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListSelectionCriteria',
            'RetargetingListRuleArgumentItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleArgumentItem',
            'RetargetingListRuleItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListRuleItem',
            'RetargetingListBase' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListBase',
            'RetargetingListGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListGetItem',
            'RetargetingListUpdateItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListUpdateItem',
            'RetargetingListAddItem' => 'Biplane\YandexDirect\Api\V5\Contract\RetargetingListAddItem',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetRetargetingListsResponse',
            'AddRequest' => 'Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsRequest',
            'AddResponse' => 'Biplane\YandexDirect\Api\V5\Contract\AddRetargetingListsResponse',
            'UpdateRequest' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsRequest',
            'UpdateResponse' => 'Biplane\YandexDirect\Api\V5\Contract\UpdateRetargetingListsResponse',
            'DeleteRequest' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsRequest',
            'DeleteResponse' => 'Biplane\YandexDirect\Api\V5\Contract\DeleteRetargetingListsResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function get(GetRetargetingListsRequest $parameters): GetRetargetingListsResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    public function add(AddRetargetingListsRequest $parameters): AddRetargetingListsResponse
    {
        return $this->__soapCall('add', [$parameters]);
    }

    public function update(UpdateRetargetingListsRequest $parameters): UpdateRetargetingListsResponse
    {
        return $this->__soapCall('update', [$parameters]);
    }

    public function delete(DeleteRetargetingListsRequest $parameters): DeleteRetargetingListsResponse
    {
        return $this->__soapCall('delete', [$parameters]);
    }
}
