<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignSearchStrategyPlacementTypes
{
//    Can be omitted.
//    protected $SearchResults;

//    Can be omitted.
//    protected $ProductGallery;

//    Can be omitted.
//    protected $DynamicPlaces;

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
     * Get SearchResults
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getSearchResults(): ?string
    {
        return $this->SearchResults ?? null;
    }

    /**
     * Set SearchResults
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setSearchResults(?string $value)
    {
        $this->SearchResults = $value;

        return $this;
    }

    /**
     * Get ProductGallery
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getProductGallery(): ?string
    {
        return $this->ProductGallery ?? null;
    }

    /**
     * Set ProductGallery
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setProductGallery(?string $value)
    {
        $this->ProductGallery = $value;

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
