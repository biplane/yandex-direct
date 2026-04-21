<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AutotargetingSettings
{
//    Can be omitted.
//    protected $Categories;

//    Can be omitted.
//    protected $BrandOptions;

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
     * Get Categories
     */
    public function getCategories(): ?AutotargetingCategories
    {
        return $this->Categories ?? null;
    }

    /**
     * Set Categories
     *
     * @return $this
     */
    public function setCategories(?AutotargetingCategories $value)
    {
        $this->Categories = $value;

        return $this;
    }

    /**
     * Get BrandOptions
     */
    public function getBrandOptions(): ?AutotargetingBrandOptions
    {
        return $this->BrandOptions ?? null;
    }

    /**
     * Set BrandOptions
     *
     * @return $this
     */
    public function setBrandOptions(?AutotargetingBrandOptions $value)
    {
        $this->BrandOptions = $value;

        return $this;
    }
}
