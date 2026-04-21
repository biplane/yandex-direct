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
    /** @var non-empty-list<int> */
    protected $RegionIds;

    /** @var non-empty-list<string> */
    protected $Keywords;

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
     * Get RegionIds
     *
     * @return non-empty-list<int>
     */
    public function getRegionIds(): array
    {
        return $this->RegionIds;
    }

    /**
     * Set RegionIds
     *
     * @param non-empty-list<int> $value
     *
     * @return $this
     */
    public function setRegionIds(array $value)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Get Keywords
     *
     * @return non-empty-list<string>
     */
    public function getKeywords(): array
    {
        return $this->Keywords;
    }

    /**
     * Set Keywords
     *
     * @param non-empty-list<string> $value
     *
     * @return $this
     */
    public function setKeywords(array $value)
    {
        $this->Keywords = $value;

        return $this;
    }
}
