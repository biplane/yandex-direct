<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class UnifiedCampaignSearchStrategyPlacementTypes
{
//    Can be omitted.
//    protected $SearchResults = null;

//    Can be omitted.
//    protected $ProductGallery = null;

//    Can be omitted.
//    protected $Maps = null;

//    Can be omitted.
//    protected $SearchOrganizationList = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see YesNoEnum
     */
    public function getSearchResults(): ?string
    {
        return $this->SearchResults ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSearchResults(?string $value = null)
    {
        $this->SearchResults = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getProductGallery(): ?string
    {
        return $this->ProductGallery ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setProductGallery(?string $value = null)
    {
        $this->ProductGallery = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getMaps(): ?string
    {
        return $this->Maps ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setMaps(?string $value = null)
    {
        $this->Maps = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getSearchOrganizationList(): ?string
    {
        return $this->SearchOrganizationList ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSearchOrganizationList(?string $value = null)
    {
        $this->SearchOrganizationList = $value;

        return $this;
    }
}
