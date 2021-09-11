<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDictionariesResponse
{
//    Can be omit.
//    protected $Currencies = null;

//    Can be omit.
//    protected $MetroStations = null;

//    Can be omit.
//    protected $GeoRegions = null;

//    Can be omit.
//    protected $TimeZones = null;

//    Can be omit.
//    protected $Constants = null;

//    Can be omit.
//    protected $AdCategories = null;

//    Can be omit.
//    protected $OperationSystemVersions = null;

//    Can be omit.
//    protected $ProductivityAssertions = null;

//    Can be omit.
//    protected $SupplySidePlatforms = null;

//    Can be omit.
//    protected $Interests = null;

//    Can be omit.
//    protected $AudienceCriteriaTypes = null;

//    Can be omit.
//    protected $AudienceDemographicProfiles = null;

//    Can be omit.
//    protected $AudienceInterests = null;

//    Can be omit.
//    protected $FilterSchemas = null;

    /**
     * Creates a new instance of GetDictionariesResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Currencies.
     *
     * @return CurrenciesItem[]|null
     */
    public function getCurrencies(): ?array
    {
        return $this->Currencies ?? null;
    }

    /**
     * Sets Currencies.
     *
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
     * Gets MetroStations.
     *
     * @return MetroStationsItem[]|null
     */
    public function getMetroStations(): ?array
    {
        return $this->MetroStations ?? null;
    }

    /**
     * Sets MetroStations.
     *
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
     * Gets GeoRegions.
     *
     * @return GeoRegionsItem[]|null
     */
    public function getGeoRegions(): ?array
    {
        return $this->GeoRegions ?? null;
    }

    /**
     * Sets GeoRegions.
     *
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
     * Gets TimeZones.
     *
     * @return TimeZonesItem[]|null
     */
    public function getTimeZones(): ?array
    {
        return $this->TimeZones ?? null;
    }

    /**
     * Sets TimeZones.
     *
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
     * Gets Constants.
     *
     * @return ConstantsItem[]|null
     */
    public function getConstants(): ?array
    {
        return $this->Constants ?? null;
    }

    /**
     * Sets Constants.
     *
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
     * Gets AdCategories.
     *
     * @return AdCategoriesItem[]|null
     */
    public function getAdCategories(): ?array
    {
        return $this->AdCategories ?? null;
    }

    /**
     * Sets AdCategories.
     *
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
     * Gets OperationSystemVersions.
     *
     * @return OperationSystemVersionsItem[]|null
     */
    public function getOperationSystemVersions(): ?array
    {
        return $this->OperationSystemVersions ?? null;
    }

    /**
     * Sets OperationSystemVersions.
     *
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
     * Gets ProductivityAssertions.
     *
     * @return ProductivityAssertionsItem[]|null
     */
    public function getProductivityAssertions(): ?array
    {
        return $this->ProductivityAssertions ?? null;
    }

    /**
     * Sets ProductivityAssertions.
     *
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
     * Gets SupplySidePlatforms.
     *
     * @return SupplySidePlatformsItem[]|null
     */
    public function getSupplySidePlatforms(): ?array
    {
        return $this->SupplySidePlatforms ?? null;
    }

    /**
     * Sets SupplySidePlatforms.
     *
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
     * Gets Interests.
     *
     * @return InterestsItem[]|null
     */
    public function getInterests(): ?array
    {
        return $this->Interests ?? null;
    }

    /**
     * Sets Interests.
     *
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
     * Gets AudienceCriteriaTypes.
     *
     * @return AudienceCriteriaTypesItem[]|null
     */
    public function getAudienceCriteriaTypes(): ?array
    {
        return $this->AudienceCriteriaTypes ?? null;
    }

    /**
     * Sets AudienceCriteriaTypes.
     *
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
     * Gets AudienceDemographicProfiles.
     *
     * @return AudienceDemographicProfilesItem[]|null
     */
    public function getAudienceDemographicProfiles(): ?array
    {
        return $this->AudienceDemographicProfiles ?? null;
    }

    /**
     * Sets AudienceDemographicProfiles.
     *
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
     * Gets AudienceInterests.
     *
     * @return AudienceInterestsItem[]|null
     */
    public function getAudienceInterests(): ?array
    {
        return $this->AudienceInterests ?? null;
    }

    /**
     * Sets AudienceInterests.
     *
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
     * Gets FilterSchemas.
     *
     * @return FilterSchemasItem[]|null
     */
    public function getFilterSchemas(): ?array
    {
        return $this->FilterSchemas ?? null;
    }

    /**
     * Sets FilterSchemas.
     *
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
