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
}
