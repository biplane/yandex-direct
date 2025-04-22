<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextCampaignPlatforms
{
    protected $SearchResult = null;

    protected $ProductGallery = null;

    protected $Network = null;

//    Can be omitted.
//    protected $DynamicPlaces = null;

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

    /**
     * @see YesNoEnum
     */
    public function getDynamicPlaces(): ?string
    {
        return $this->DynamicPlaces ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setDynamicPlaces(?string $value = null)
    {
        $this->DynamicPlaces = $value;

        return $this;
    }
}
