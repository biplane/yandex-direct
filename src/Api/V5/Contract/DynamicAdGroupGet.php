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
//    protected $AutotargetingCategories = null;

//    Can be omitted.
//    protected $AutotargetingSettings = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getAutotargetingCategories(): ?AutotargetingCategoryArray
    {
        return $this->AutotargetingCategories ?? null;
    }

    /**
     * @return $this
     */
    public function setAutotargetingCategories(?AutotargetingCategoryArray $value = null)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }

    public function getAutotargetingSettings(): ?AutotargetingSettings
    {
        return $this->AutotargetingSettings ?? null;
    }

    /**
     * @return $this
     */
    public function setAutotargetingSettings(?AutotargetingSettings $value = null)
    {
        $this->AutotargetingSettings = $value;

        return $this;
    }
}
