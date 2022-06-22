<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicAdGroup
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

    /**
     * @return AutotargetingCategory[]|null
     */
    public function getAutotargetingCategories(): ?array
    {
        return $this->AutotargetingCategories ?? null;
    }

    /**
     * @param AutotargetingCategory[]|null $value
     *
     * @return $this
     */
    public function setAutotargetingCategories(?array $value = null)
    {
        $this->AutotargetingCategories = $value;

        return $this;
    }
}
