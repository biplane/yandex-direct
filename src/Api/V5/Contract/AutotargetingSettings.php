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
//    protected $Categories = null;

//    Can be omitted.
//    protected $BrandOptions = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCategories(): ?AutotargetingCategories
    {
        return $this->Categories ?? null;
    }

    /**
     * @return $this
     */
    public function setCategories(?AutotargetingCategories $value = null)
    {
        $this->Categories = $value;

        return $this;
    }

    public function getBrandOptions(): ?AutotargetingBrandOptions
    {
        return $this->BrandOptions ?? null;
    }

    /**
     * @return $this
     */
    public function setBrandOptions(?AutotargetingBrandOptions $value = null)
    {
        $this->BrandOptions = $value;

        return $this;
    }
}
