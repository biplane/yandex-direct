<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetDictionariesResponse
{
//    Can be omitted.
//    protected $Currencies;

//    Can be omitted.
//    protected $MetroStations;

//    Can be omitted.
//    protected $GeoRegions;

//    Can be omitted.
//    protected $GeoRegionNames;

//    Can be omitted.
//    protected $TimeZones;

//    Can be omitted.
//    protected $Constants;

//    Can be omitted.
//    protected $AdCategories;

//    Can be omitted.
//    protected $OperationSystemVersions;

//    Can be omitted.
//    protected $ProductivityAssertions;

//    Can be omitted.
//    protected $SupplySidePlatforms;

//    Can be omitted.
//    protected $Interests;

//    Can be omitted.
//    protected $AudienceCriteriaTypes;

//    Can be omitted.
//    protected $AudienceDemographicProfiles;

//    Can be omitted.
//    protected $AudienceInterests;

//    Can be omitted.
//    protected $FilterSchemas;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Currencies
     *
     * @return list<CurrenciesItem>
     */
    public function getCurrencies(): array
    {
        return $this->Currencies ?? [];
    }

    /**
     * Set Currencies
     *
     * @param list<CurrenciesItem> $value
     *
     * @return $this
     */
    public function setCurrencies(array $value)
    {
        $this->Currencies = $value;

        return $this;
    }

    /**
     * Get MetroStations
     *
     * @return list<MetroStationsItem>
     */
    public function getMetroStations(): array
    {
        return $this->MetroStations ?? [];
    }

    /**
     * Set MetroStations
     *
     * @param list<MetroStationsItem> $value
     *
     * @return $this
     */
    public function setMetroStations(array $value)
    {
        $this->MetroStations = $value;

        return $this;
    }

    /**
     * Get GeoRegions
     *
     * @return list<GeoRegionsItem>
     */
    public function getGeoRegions(): array
    {
        return $this->GeoRegions ?? [];
    }

    /**
     * Set GeoRegions
     *
     * @param list<GeoRegionsItem> $value
     *
     * @return $this
     */
    public function setGeoRegions(array $value)
    {
        $this->GeoRegions = $value;

        return $this;
    }

    /**
     * Get GeoRegionNames
     *
     * @return list<GeoRegionNamesItem>
     */
    public function getGeoRegionNames(): array
    {
        return $this->GeoRegionNames ?? [];
    }

    /**
     * Set GeoRegionNames
     *
     * @param list<GeoRegionNamesItem> $value
     *
     * @return $this
     */
    public function setGeoRegionNames(array $value)
    {
        $this->GeoRegionNames = $value;

        return $this;
    }

    /**
     * Get TimeZones
     *
     * @return list<TimeZonesItem>
     */
    public function getTimeZones(): array
    {
        return $this->TimeZones ?? [];
    }

    /**
     * Set TimeZones
     *
     * @param list<TimeZonesItem> $value
     *
     * @return $this
     */
    public function setTimeZones(array $value)
    {
        $this->TimeZones = $value;

        return $this;
    }

    /**
     * Get Constants
     *
     * @return list<ConstantsItem>
     */
    public function getConstants(): array
    {
        return $this->Constants ?? [];
    }

    /**
     * Set Constants
     *
     * @param list<ConstantsItem> $value
     *
     * @return $this
     */
    public function setConstants(array $value)
    {
        $this->Constants = $value;

        return $this;
    }

    /**
     * Get AdCategories
     *
     * @return list<AdCategoriesItem>
     */
    public function getAdCategories(): array
    {
        return $this->AdCategories ?? [];
    }

    /**
     * Set AdCategories
     *
     * @param list<AdCategoriesItem> $value
     *
     * @return $this
     */
    public function setAdCategories(array $value)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * Get OperationSystemVersions
     *
     * @return list<OperationSystemVersionsItem>
     */
    public function getOperationSystemVersions(): array
    {
        return $this->OperationSystemVersions ?? [];
    }

    /**
     * Set OperationSystemVersions
     *
     * @param list<OperationSystemVersionsItem> $value
     *
     * @return $this
     */
    public function setOperationSystemVersions(array $value)
    {
        $this->OperationSystemVersions = $value;

        return $this;
    }

    /**
     * Get ProductivityAssertions
     *
     * @return list<ProductivityAssertionsItem>
     */
    public function getProductivityAssertions(): array
    {
        return $this->ProductivityAssertions ?? [];
    }

    /**
     * Set ProductivityAssertions
     *
     * @param list<ProductivityAssertionsItem> $value
     *
     * @return $this
     */
    public function setProductivityAssertions(array $value)
    {
        $this->ProductivityAssertions = $value;

        return $this;
    }

    /**
     * Get SupplySidePlatforms
     *
     * @return list<SupplySidePlatformsItem>
     */
    public function getSupplySidePlatforms(): array
    {
        return $this->SupplySidePlatforms ?? [];
    }

    /**
     * Set SupplySidePlatforms
     *
     * @param list<SupplySidePlatformsItem> $value
     *
     * @return $this
     */
    public function setSupplySidePlatforms(array $value)
    {
        $this->SupplySidePlatforms = $value;

        return $this;
    }

    /**
     * Get Interests
     *
     * @return list<InterestsItem>
     */
    public function getInterests(): array
    {
        return $this->Interests ?? [];
    }

    /**
     * Set Interests
     *
     * @param list<InterestsItem> $value
     *
     * @return $this
     */
    public function setInterests(array $value)
    {
        $this->Interests = $value;

        return $this;
    }

    /**
     * Get AudienceCriteriaTypes
     *
     * @return list<AudienceCriteriaTypesItem>
     */
    public function getAudienceCriteriaTypes(): array
    {
        return $this->AudienceCriteriaTypes ?? [];
    }

    /**
     * Set AudienceCriteriaTypes
     *
     * @param list<AudienceCriteriaTypesItem> $value
     *
     * @return $this
     */
    public function setAudienceCriteriaTypes(array $value)
    {
        $this->AudienceCriteriaTypes = $value;

        return $this;
    }

    /**
     * Get AudienceDemographicProfiles
     *
     * @return list<AudienceDemographicProfilesItem>
     */
    public function getAudienceDemographicProfiles(): array
    {
        return $this->AudienceDemographicProfiles ?? [];
    }

    /**
     * Set AudienceDemographicProfiles
     *
     * @param list<AudienceDemographicProfilesItem> $value
     *
     * @return $this
     */
    public function setAudienceDemographicProfiles(array $value)
    {
        $this->AudienceDemographicProfiles = $value;

        return $this;
    }

    /**
     * Get AudienceInterests
     *
     * @return list<AudienceInterestsItem>
     */
    public function getAudienceInterests(): array
    {
        return $this->AudienceInterests ?? [];
    }

    /**
     * Set AudienceInterests
     *
     * @param list<AudienceInterestsItem> $value
     *
     * @return $this
     */
    public function setAudienceInterests(array $value)
    {
        $this->AudienceInterests = $value;

        return $this;
    }

    /**
     * Get FilterSchemas
     *
     * @return list<FilterSchemasItem>
     */
    public function getFilterSchemas(): array
    {
        return $this->FilterSchemas ?? [];
    }

    /**
     * Set FilterSchemas
     *
     * @param list<FilterSchemasItem> $value
     *
     * @return $this
     */
    public function setFilterSchemas(array $value)
    {
        $this->FilterSchemas = $value;

        return $this;
    }
}
