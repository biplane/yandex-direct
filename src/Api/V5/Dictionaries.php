<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetDictionariesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetDictionariesResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Dictionaries extends ApiSoapClientV5
{
    public const ENDPOINT = 'https://api.direct.yandex.com/v5/dictionaries?wsdl';

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
            'DictionaryNameEnum' => 'Biplane\YandexDirect\Api\V5\Contract\DictionaryNameEnum',
            'CurrenciesItem' => 'Biplane\YandexDirect\Api\V5\Contract\CurrenciesItem',
            'MetroStationsItem' => 'Biplane\YandexDirect\Api\V5\Contract\MetroStationsItem',
            'GeoRegionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\GeoRegionsItem',
            'TimeZonesItem' => 'Biplane\YandexDirect\Api\V5\Contract\TimeZonesItem',
            'ConstantsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ConstantsItem',
            'AdCategoriesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdCategoriesItem',
            'OperationSystemVersionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\OperationSystemVersionsItem',
            'ProductivityAssertionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ProductivityAssertionsItem',
            'SupplySidePlatformsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SupplySidePlatformsItem',
            'InterestsItem' => 'Biplane\YandexDirect\Api\V5\Contract\InterestsItem',
            'CanSelectEnum' => 'Biplane\YandexDirect\Api\V5\Contract\CanSelectEnum',
            'InterestTypeEnum' => 'Biplane\YandexDirect\Api\V5\Contract\InterestTypeEnum',
            'AudienceCriteriaTypesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceCriteriaTypesItem',
            'AudienceDemographicProfilesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceDemographicProfilesItem',
            'AudienceInterestsItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceInterestsItem',
            'FilterFieldType' => 'Biplane\YandexDirect\Api\V5\Contract\FilterFieldType',
            'EnumFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Contract\EnumFilterFieldProps',
            'NumberFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Contract\NumberFilterFieldProps',
            'StringFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Contract\StringFilterFieldProps',
            'FilterFieldOperator' => 'Biplane\YandexDirect\Api\V5\Contract\FilterFieldOperator',
            'FilterFieldItem' => 'Biplane\YandexDirect\Api\V5\Contract\FilterFieldItem',
            'FilterSchemasItem' => 'Biplane\YandexDirect\Api\V5\Contract\FilterSchemasItem',
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetDictionariesRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetDictionariesResponse',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    public function get(GetDictionariesRequest $parameters): GetDictionariesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }
}
