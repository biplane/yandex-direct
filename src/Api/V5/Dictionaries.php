<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Contract\GetDictionariesRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetDictionariesResponse;
use Biplane\YandexDirect\Api\V5\Contract\GetGeoRegionsRequest;
use Biplane\YandexDirect\Api\V5\Contract\GetGeoRegionsResponse;
use Biplane\YandexDirect\Config;

/**
 * Auto-generated code.
 */
class Dictionaries extends ApiSoapClientV5
{
    public const string ENDPOINT = 'https://api.direct.yandex.com/v501/dictionaries?wsdl';

    /**
     * Constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(Config $config, array $options)
    {
        $options['classmap'] = [
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetDictionariesRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetDictionariesResponse',
            'CurrenciesItem' => 'Biplane\YandexDirect\Api\V5\Contract\CurrenciesItem',
            'ConstantsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ConstantsItem',
            'MetroStationsItem' => 'Biplane\YandexDirect\Api\V5\Contract\MetroStationsItem',
            'GeoRegionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\GeoRegionsItem',
            'GeoRegionNamesItem' => 'Biplane\YandexDirect\Api\V5\Contract\GeoRegionNamesItem',
            'TimeZonesItem' => 'Biplane\YandexDirect\Api\V5\Contract\TimeZonesItem',
            'AdCategoriesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AdCategoriesItem',
            'OperationSystemVersionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\OperationSystemVersionsItem',
            'ProductivityAssertionsItem' => 'Biplane\YandexDirect\Api\V5\Contract\ProductivityAssertionsItem',
            'SupplySidePlatformsItem' => 'Biplane\YandexDirect\Api\V5\Contract\SupplySidePlatformsItem',
            'InterestsItem' => 'Biplane\YandexDirect\Api\V5\Contract\InterestsItem',
            'AudienceCriteriaTypesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceCriteriaTypesItem',
            'AudienceDemographicProfilesItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceDemographicProfilesItem',
            'AudienceInterestsItem' => 'Biplane\YandexDirect\Api\V5\Contract\AudienceInterestsItem',
            'FilterSchemasItem' => 'Biplane\YandexDirect\Api\V5\Contract\FilterSchemasItem',
            'FilterFieldItem' => 'Biplane\YandexDirect\Api\V5\Contract\FilterFieldItem',
            'EnumFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Contract\EnumFilterFieldProps',
            'NumberFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Contract\NumberFilterFieldProps',
            'StringFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Contract\StringFilterFieldProps',
            'FilterFieldOperator' => 'Biplane\YandexDirect\Api\V5\Contract\FilterFieldOperator',
            'GetGeoRegionsRequest' => 'Biplane\YandexDirect\Api\V5\Contract\GetGeoRegionsRequest',
            'GeoRegionsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Contract\GeoRegionsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\Contract\LimitOffset',
            'GetGeoRegionsResponse' => 'Biplane\YandexDirect\Api\V5\Contract\GetGeoRegionsResponse',
            'GeoRegionGetItem' => 'Biplane\YandexDirect\Api\V5\Contract\GeoRegionGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\Contract\GetResponseGeneral',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetDictionariesRequest $parameters): GetDictionariesResponse
    {
        return $this->__soapCall('get', [$parameters]);
    }

    /**
     * Calls operation: getGeoRegions
     */
    public function getGeoRegions(GetGeoRegionsRequest $parameters): GetGeoRegionsResponse
    {
        return $this->__soapCall('getGeoRegions', [$parameters]);
    }
}
