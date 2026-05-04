<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdGroups;

use AllowDynamicProperties;
use Biplane\YandexDirect\Api\V5\General\AutotargetingCategory;
use Biplane\YandexDirect\Api\V5\General\AutotargetingSettings;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicAdGroup
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
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get AutotargetingCategories
     *
     * @return list<AutotargetingCategory>
     */
    public function getAutotargetingCategories(): array
    {
        return $this->AutotargetingCategories ?? [];
    }

    /**
     * Set AutotargetingCategories
     *
     * @param list<AutotargetingCategory> $value
     *
     * @return $this
     */
    public function setAutotargetingCategories(array $value)
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
