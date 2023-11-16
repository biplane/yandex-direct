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
//    protected $Name = null;

//    Can be omitted.
//    protected $RegionIds = null;

//    Can be omitted.
//    protected $ExactNames = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getRegionIds(): ?array
    {
        return $this->RegionIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setRegionIds(?array $value = null)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getExactNames(): ?array
    {
        return $this->ExactNames ?? null;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setExactNames(?array $value = null)
    {
        $this->ExactNames = $value;

        return $this;
    }
}
