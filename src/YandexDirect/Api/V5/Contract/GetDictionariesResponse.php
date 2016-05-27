<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetDictionariesResponse
{

    protected $Currencies = null;

    protected $MetroStations = null;

    protected $GeoRegions = null;

    protected $TimeZones = null;

    protected $Constants = null;

    protected $AdCategories = null;

    protected $OperationSystemVersions = null;

    protected $ProductivityAssertions = null;

    protected $SupplySidePlatforms = null;

    /**
     * Creates a new instance of GetDictionariesResponse.
     *
     * @return GetDictionariesResponse
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Currencies.
     *
     * @return CurrenciesItem[]|null
     */
    public function getCurrencies()
    {
        return $this->Currencies;
    }

    /**
     * Sets Currencies.
     *
     * @param CurrenciesItem[]|null $value
     * @return $this
     */
    public function setCurrencies(array $value = null)
    {
        $this->Currencies = $value;

        return $this;
    }

    /**
     * Gets MetroStations.
     *
     * @return MetroStationsItem[]|null
     */
    public function getMetroStations()
    {
        return $this->MetroStations;
    }

    /**
     * Sets MetroStations.
     *
     * @param MetroStationsItem[]|null $value
     * @return $this
     */
    public function setMetroStations(array $value = null)
    {
        $this->MetroStations = $value;

        return $this;
    }

    /**
     * Gets GeoRegions.
     *
     * @return GeoRegionsItem[]|null
     */
    public function getGeoRegions()
    {
        return $this->GeoRegions;
    }

    /**
     * Sets GeoRegions.
     *
     * @param GeoRegionsItem[]|null $value
     * @return $this
     */
    public function setGeoRegions(array $value = null)
    {
        $this->GeoRegions = $value;

        return $this;
    }

    /**
     * Gets TimeZones.
     *
     * @return TimeZonesItem[]|null
     */
    public function getTimeZones()
    {
        return $this->TimeZones;
    }

    /**
     * Sets TimeZones.
     *
     * @param TimeZonesItem[]|null $value
     * @return $this
     */
    public function setTimeZones(array $value = null)
    {
        $this->TimeZones = $value;

        return $this;
    }

    /**
     * Gets Constants.
     *
     * @return ConstantsItem[]|null
     */
    public function getConstants()
    {
        return $this->Constants;
    }

    /**
     * Sets Constants.
     *
     * @param ConstantsItem[]|null $value
     * @return $this
     */
    public function setConstants(array $value = null)
    {
        $this->Constants = $value;

        return $this;
    }

    /**
     * Gets AdCategories.
     *
     * @return AdCategoriesItem[]|null
     */
    public function getAdCategories()
    {
        return $this->AdCategories;
    }

    /**
     * Sets AdCategories.
     *
     * @param AdCategoriesItem[]|null $value
     * @return $this
     */
    public function setAdCategories(array $value = null)
    {
        $this->AdCategories = $value;

        return $this;
    }

    /**
     * Gets OperationSystemVersions.
     *
     * @return OperationSystemVersionsItem[]|null
     */
    public function getOperationSystemVersions()
    {
        return $this->OperationSystemVersions;
    }

    /**
     * Sets OperationSystemVersions.
     *
     * @param OperationSystemVersionsItem[]|null $value
     * @return $this
     */
    public function setOperationSystemVersions(array $value = null)
    {
        $this->OperationSystemVersions = $value;

        return $this;
    }

    /**
     * Gets ProductivityAssertions.
     *
     * @return ProductivityAssertionsItem[]|null
     */
    public function getProductivityAssertions()
    {
        return $this->ProductivityAssertions;
    }

    /**
     * Sets ProductivityAssertions.
     *
     * @param ProductivityAssertionsItem[]|null $value
     * @return $this
     */
    public function setProductivityAssertions(array $value = null)
    {
        $this->ProductivityAssertions = $value;

        return $this;
    }

    /**
     * Gets SupplySidePlatforms.
     *
     * @return SupplySidePlatformsItem[]|null
     */
    public function getSupplySidePlatforms()
    {
        return $this->SupplySidePlatforms;
    }

    /**
     * Sets SupplySidePlatforms.
     *
     * @param SupplySidePlatformsItem[]|null $value
     * @return $this
     */
    public function setSupplySidePlatforms(array $value = null)
    {
        $this->SupplySidePlatforms = $value;

        return $this;
    }


}

