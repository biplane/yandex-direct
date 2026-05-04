<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5;

use Biplane\YandexDirect\Api\ApiSoapClientV5;
use Biplane\YandexDirect\Api\V5\Dictionaries\GetGeoRegionsRequest;
use Biplane\YandexDirect\Api\V5\Dictionaries\GetGeoRegionsResponse;
use Biplane\YandexDirect\Api\V5\Dictionaries\GetRequest;
use Biplane\YandexDirect\Api\V5\Dictionaries\GetResponse;
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
            'GetRequest' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GetRequest',
            'GetResponse' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GetResponse',
            'CurrenciesItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\CurrenciesItem',
            'ConstantsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\ConstantsItem',
            'MetroStationsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\MetroStationsItem',
            'GeoRegionsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GeoRegionsItem',
            'GeoRegionNamesItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GeoRegionNamesItem',
            'TimeZonesItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\TimeZonesItem',
            'AdCategoriesItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\AdCategoriesItem',
            'OperationSystemVersionsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\OperationSystemVersionsItem',
            'ProductivityAssertionsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\ProductivityAssertionsItem',
            'SupplySidePlatformsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\SupplySidePlatformsItem',
            'InterestsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\InterestsItem',
            'AudienceCriteriaTypesItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\AudienceCriteriaTypesItem',
            'AudienceDemographicProfilesItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\AudienceDemographicProfilesItem',
            'AudienceInterestsItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\AudienceInterestsItem',
            'FilterSchemasItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\FilterSchemasItem',
            'FilterFieldItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\FilterFieldItem',
            'EnumFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Dictionaries\EnumFilterFieldProps',
            'NumberFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Dictionaries\NumberFilterFieldProps',
            'StringFilterFieldProps' => 'Biplane\YandexDirect\Api\V5\Dictionaries\StringFilterFieldProps',
            'FilterFieldOperator' => 'Biplane\YandexDirect\Api\V5\Dictionaries\FilterFieldOperator',
            'GetGeoRegionsRequest' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GetGeoRegionsRequest',
            'GeoRegionsSelectionCriteria' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GeoRegionsSelectionCriteria',
            'GetRequestGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetRequestGeneral',
            'LimitOffset' => 'Biplane\YandexDirect\Api\V5\General\LimitOffset',
            'GetGeoRegionsResponse' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GetGeoRegionsResponse',
            'GeoRegionGetItem' => 'Biplane\YandexDirect\Api\V5\Dictionaries\GeoRegionGetItem',
            'GetResponseGeneral' => 'Biplane\YandexDirect\Api\V5\General\GetResponseGeneral',
        ];

        parent::__construct(self::ENDPOINT, $config, $options);
    }

    /**
     * Calls operation: get
     */
    public function get(GetRequest $parameters): GetResponse
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
