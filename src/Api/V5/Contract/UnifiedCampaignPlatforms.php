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
    protected $SearchResult = null;

    protected $ProductGallery = null;

//    Can be omitted.
//    protected $Maps = null;

//    Can be omitted.
//    protected $SearchOrganizationList = null;

    protected $Network = null;

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
    public function getSearchResult(): string
    {
        return $this->SearchResult;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setSearchResult(string $value)
    {
        $this->SearchResult = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getProductGallery(): string
    {
        return $this->ProductGallery;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setProductGallery(string $value)
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

    /**
     * @see YesNoEnum
     */
    public function getNetwork(): string
    {
        return $this->Network;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setNetwork(string $value)
    {
        $this->Network = $value;

        return $this;
    }
}
