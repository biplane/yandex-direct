<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupBase
{
//    Can be omitted.
//    protected $RegionIds = null;

//    Can be omitted.
//    protected $NegativeKeywords = null;

//    Can be omitted.
//    protected $NegativeKeywordSharedSetIds = null;

//    Can be omitted.
//    protected $TrackingParams = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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
    public function getNegativeKeywords(): ?array
    {
        return $this->NegativeKeywords ?? null;
    }

    /**
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
     * @return float[]|null
     */
    public function getNegativeKeywordSharedSetIds(): ?array
    {
        return $this->NegativeKeywordSharedSetIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(?array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    public function getTrackingParams(): ?string
    {
        return $this->TrackingParams ?? null;
    }

    /**
     * @return $this
     */
    public function setTrackingParams(?string $value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }
}
