<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GeoRegionsSelectionCriteria
{
//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $RegionIds;

//    Can be omitted.
//    protected $ExactNames;

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
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get RegionIds
     *
     * @return list<int>
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds ?? [];
    }

    /**
     * Set RegionIds
     *
     * @param list<int> $value
     *
     * @return $this
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Get ExactNames
     *
     * @return list<string>
     */
    public function getExactNames(): array
    {
        return $this->ExactNames ?? [];
    }

    /**
     * Set ExactNames
     *
     * @param list<string> $value
     *
     * @return $this
     */
    public function setExactNames(array $value)
    {
        $this->ExactNames = $value;

        return $this;
    }
}
