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
//    protected $SearchResults = null;

//    Can be omitted.
//    protected $ProductGallery = null;

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
}
