<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupBase
{
//    Can be omit.
//    protected $RegionIds = null;

//    Can be omit.
//    protected $NegativeKeywords = null;

//    Can be omit.
//    protected $NegativeKeywordSharedSetIds = null;

//    Can be omit.
//    protected $TrackingParams = null;

    /**
     * Creates a new instance of AdGroupBase.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]|null
     */
    public function getRegionIds(): ?array
    {
        return $this->RegionIds ?? null;
    }

    /**
     * Sets RegionIds.
     *
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
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywords(?array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywordSharedSetIds.
     *
     * @return float[]|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * Sets NegativeKeywordSharedSetIds.
     *
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    /**
     * Gets TrackingParams.
     */
    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * Sets TrackingParams.
     *
     * @return $this
     */
    public function setTrackingParams(?string $value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }
}
