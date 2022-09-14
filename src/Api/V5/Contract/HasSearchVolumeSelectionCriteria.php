<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class HasSearchVolumeSelectionCriteria
{
    protected $RegionIds = [];

    protected $Keywords = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds;
    }

    /**
     * @param int[] $value
     *
     * @return $this
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * @param string[] $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
