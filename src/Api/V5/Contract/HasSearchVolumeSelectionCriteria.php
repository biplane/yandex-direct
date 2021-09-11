<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class HasSearchVolumeSelectionCriteria
{
    protected $RegionIds = [];

    protected $Keywords = [];

    /**
     * Creates a new instance of HasSearchVolumeSelectionCriteria.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds;
    }

    /**
     * Sets RegionIds.
     *
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
     * Gets Keywords.
     *
     * @return string[]
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Sets Keywords.
     *
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
