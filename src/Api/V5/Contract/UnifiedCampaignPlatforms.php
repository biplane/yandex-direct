<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignPlatforms
{
    /** @var 'YES'|'NO' */
    protected $SearchResult;

    /** @var 'YES'|'NO' */
    protected $ProductGallery;

//    Can be omitted.
//    protected $Maps;

//    Can be omitted.
//    protected $SearchOrganizationList;

    /** @var 'YES'|'NO' */
    protected $Network;

//    Can be omitted.
//    protected $DynamicPlaces;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get SearchResult
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getSearchResult(): string
    {
        return $this->SearchResult;
    }

    /**
     * Set SearchResult
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setSearchResult(string $value)
    {
        $this->SearchResult = $value;

        return $this;
    }

    /**
     * Get ProductGallery
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getProductGallery(): string
    {
        return $this->ProductGallery;
    }

    /**
     * Set ProductGallery
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setProductGallery(string $value)
    {
        $this->ProductGallery = $value;

        return $this;
    }

    /**
     * Get Maps
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getMaps(): ?string
    {
        return $this->Maps ?? null;
    }

    /**
     * Set Maps
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setMaps(?string $value)
    {
        $this->Maps = $value;

        return $this;
    }

    /**
     * Get SearchOrganizationList
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getSearchOrganizationList(): ?string
    {
        return $this->SearchOrganizationList ?? null;
    }

    /**
     * Set SearchOrganizationList
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setSearchOrganizationList(?string $value)
    {
        $this->SearchOrganizationList = $value;

        return $this;
    }

    /**
     * Get Network
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'
     */
    public function getNetwork(): string
    {
        return $this->Network;
    }

    /**
     * Set Network
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO' $value
     *
     * @return $this
     */
    public function setNetwork(string $value)
    {
        $this->Network = $value;

        return $this;
    }

    /**
     * Get DynamicPlaces
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getDynamicPlaces(): ?string
    {
        return $this->DynamicPlaces ?? null;
    }

    /**
     * Set DynamicPlaces
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setDynamicPlaces(?string $value)
    {
        $this->DynamicPlaces = $value;

        return $this;
    }
}
