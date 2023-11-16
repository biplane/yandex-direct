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
//    protected $Currencies = null;

//    Can be omitted.
//    protected $MetroStations = null;

//    Can be omitted.
//    protected $GeoRegions = null;

//    Can be omitted.
//    protected $GeoRegionNames = null;

//    Can be omitted.
//    protected $TimeZones = null;

//    Can be omitted.
//    protected $Constants = null;

//    Can be omitted.
//    protected $AdCategories = null;

//    Can be omitted.
//    protected $OperationSystemVersions = null;

//    Can be omitted.
//    protected $ProductivityAssertions = null;

//    Can be omitted.
//    protected $SupplySidePlatforms = null;

//    Can be omitted.
//    protected $Interests = null;

//    Can be omitted.
//    protected $AudienceCriteriaTypes = null;

//    Can be omitted.
//    protected $AudienceDemographicProfiles = null;

//    Can be omitted.
//    protected $AudienceInterests = null;

//    Can be omitted.
//    protected $FilterSchemas = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return CurrenciesItem[]|null
     */
    public function getCurrencies(): ?array
    {
        return $this->Currencies ?? null;
    }

    /**
     * @param CurrenciesItem[]|null $value
     *
     * @return $this
     */
    public function setCurrencies(?array $value = null)
    {
        $this->Currencies = $value;

        return $this;
    }

    /**
     * @return MetroStationsItem[]|null
     */
    public function getMetroStations(): ?array
    {
        return $this->MetroStations ?? null;
    }

    /**
     * @param MetroStationsItem[]|null $value
     *
     * @return $this
     */
    public function setMetroStations(?array $value = null)
    {
        $this->MetroStations = $value;

        return $this;
    }

    /**
     * @return GeoRegionsItem[]|null
     */
    public function getGeoRegions(): ?array
    {
        return $this->GeoRegions ?? null;
    }

    /**
     * @param GeoRegionsItem[]|null $value
     *
     * @return $this
     */
    public function setGeoRegions(?array $value = null)
    {
        $this->GeoRegions = $value;

        return $this;
    }

    /**
     * @return GeoRegionNamesItem[]|null
     */
    public function getGeoRegionNames(): ?array
    {
        return $this->GeoRegionNames ?? null;
    }

    /**
     * @param GeoRegionNamesItem[]|null $value
     *
     * @return $this
     */
    public function setGeoRegionNames(?array $value = null)
    {
        $this->GeoRegionNames = $value;

        return $this;
    }

    /**
     * @return TimeZonesItem[]|null
     */
    public function getTimeZones(): ?array
    {
        return $this->TimeZones ?? null;
    }

    /**
     * @param TimeZonesItem[]|null $value
     *
     * @return $this
     */
    public function setTimeZones(?array $value = null)
    {
        $this->TimeZones = $value;

        return $this;
    }

    /**
     * @return ConstantsItem[]|null
     */
    public function getConstants(): ?array
    {
        return $this->Constants ?? null;
    }

    /**
     * @param ConstantsItem[]|null $value
     *
     * @return $this
     */
    public function setConstants(?array $value = null)
    {
        $this->Constants = $value;

        return $this;
    }

    /**
     * @return AdCategoriesItem[]|null
     */
    public function getAdCategories(): ?array
    {
        return $this->AdCategories ?? null;
    }

    /**
     * @param AdCategoriesItem[]|null $value
     *
     * @return $this
     */
    public function setAdCategories(?array $value = null)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * @return OperationSystemVersionsItem[]|null
     */
    public function getOperationSystemVersions(): ?array
    {
        return $this->OperationSystemVersions ?? null;
    }

    /**
     * @param OperationSystemVersionsItem[]|null $value
     *
     * @return $this
     */
    public function setOperationSystemVersions(?array $value = null)
    {
        $this->OperationSystemVersions = $value;

        return $this;
    }

    /**
     * @return ProductivityAssertionsItem[]|null
     */
    public function getProductivityAssertions(): ?array
    {
        return $this->ProductivityAssertions ?? null;
    }

    /**
     * @param ProductivityAssertionsItem[]|null $value
     *
     * @return $this
     */
    public function setProductivityAssertions(?array $value = null)
    {
        $this->ProductivityAssertions = $value;

        return $this;
    }

    /**
     * @return SupplySidePlatformsItem[]|null
     */
    public function getSupplySidePlatforms(): ?array
    {
        return $this->SupplySidePlatforms ?? null;
    }

    /**
     * @param SupplySidePlatformsItem[]|null $value
     *
     * @return $this
     */
    public function setSupplySidePlatforms(?array $value = null)
    {
        $this->SupplySidePlatforms = $value;

        return $this;
    }

    /**
     * @return InterestsItem[]|null
     */
    public function getInterests(): ?array
    {
        return $this->Interests ?? null;
    }

    /**
     * @param InterestsItem[]|null $value
     *
     * @return $this
     */
    public function setInterests(?array $value = null)
    {
        $this->Interests = $value;

        return $this;
    }

    /**
     * @return AudienceCriteriaTypesItem[]|null
     */
    public function getAudienceCriteriaTypes(): ?array
    {
        return $this->AudienceCriteriaTypes ?? null;
    }

    /**
     * @param AudienceCriteriaTypesItem[]|null $value
     *
     * @return $this
     */
    public function setAudienceCriteriaTypes(?array $value = null)
    {
        $this->AudienceCriteriaTypes = $value;

        return $this;
    }

    /**
     * @return AudienceDemographicProfilesItem[]|null
     */
    public function getAudienceDemographicProfiles(): ?array
    {
        return $this->AudienceDemographicProfiles ?? null;
    }

    /**
     * @param AudienceDemographicProfilesItem[]|null $value
     *
     * @return $this
     */
    public function setAudienceDemographicProfiles(?array $value = null)
    {
        $this->AudienceDemographicProfiles = $value;

        return $this;
    }

    /**
     * @return AudienceInterestsItem[]|null
     */
    public function getAudienceInterests(): ?array
    {
        return $this->AudienceInterests ?? null;
    }

    /**
     * @param AudienceInterestsItem[]|null $value
     *
     * @return $this
     */
    public function setAudienceInterests(?array $value = null)
    {
        $this->AudienceInterests = $value;

        return $this;
    }

    /**
     * @return FilterSchemasItem[]|null
     */
    public function getFilterSchemas(): ?array
    {
        return $this->FilterSchemas ?? null;
    }

    /**
     * @param FilterSchemasItem[]|null $value
     *
     * @return $this
     */
    public function setFilterSchemas(?array $value = null)
    {
        $this->FilterSchemas = $value;

        return $this;
    }
}
