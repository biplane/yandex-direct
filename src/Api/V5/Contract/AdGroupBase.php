<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AdGroupBase
{
//    Can be omitted.
//    protected $RegionIds;

//    Can be omitted.
//    protected $NegativeKeywords;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds;

//    Can be omitted.
//    protected $TrackingParams;

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
     * Get NegativeKeywords
     *
     * @return non-empty-list<string>|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Set NegativeKeywords
     *
     * @param non-empty-list<string>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Get NegativeKeywordSharedSetIds
     *
     * @return non-empty-list<int>|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Set NegativeKeywordSharedSetIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    /**
     * Get TrackingParams
     */
    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * Set TrackingParams
     *
     * @return $this
     */
    public function setTrackingParams(?string $value)
    {
        $this->TrackingParams = $value;

        return $this;
    }
}
