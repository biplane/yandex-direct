<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicAdGroupGet
{
//    Can be omitted.
//    protected $AutotargetingCategories;

//    Can be omitted.
//    protected $AutotargetingSettings;

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
     * Get AutotargetingCategories
     */
    public function getAutotargetingCategories(): ?AutotargetingCategoryArray
    {
        return $this->AutotargetingCategories ?? null;
    }

    /**
     * Set AutotargetingCategories
     *
     * @return $this
     */
    public function setAutotargetingCategories(?AutotargetingCategoryArray $value)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    /**
     * Get AutotargetingSettings
     */
    public function getAutotargetingSettings(): ?AutotargetingSettings
    {
        return $this->AutotargetingSettings ?? null;
    }

    /**
     * Set AutotargetingSettings
     *
     * @return $this
     */
    public function setAutotargetingSettings(?AutotargetingSettings $value)
    {
        $this->AutotargetingSettings = $value;

        return $this;
    }
}
