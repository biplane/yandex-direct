<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RegionIds.
     *
     * @return int[]|null
     */
    public function getRegionIds()
    {
        return isset($this->RegionIds) ? $this->RegionIds : null;
    }

    /**
     * Sets RegionIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setRegionIds(array $value = null)
    {
        $this->RegionIds = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywords.
     *
     * @return string[]|null
     */
    public function getNegativeKeywords()
    {
        return isset($this->NegativeKeywords) ? $this->NegativeKeywords : null;
    }

    /**
     * Sets NegativeKeywords.
     *
     * @param string[]|null $value
     * @return $this
     */
    public function setNegativeKeywords(array $value = null)
    {
        $this->NegativeKeywords = $value;

        return $this;
    }

    /**
     * Gets NegativeKeywordSharedSetIds.
     *
     * @return float[]|null
     */
    public function getNegativeKeywordSharedSetIds()
    {
        return isset($this->NegativeKeywordSharedSetIds) ? $this->NegativeKeywordSharedSetIds : null;
    }

    /**
     * Sets NegativeKeywordSharedSetIds.
     *
     * @param float[]|null $value
     * @return $this
     */
    public function setNegativeKeywordSharedSetIds(array $value = null)
    {
        $this->NegativeKeywordSharedSetIds = $value;

        return $this;
    }

    /**
     * Gets TrackingParams.
     *
     * @return string|null
     */
    public function getTrackingParams()
    {
        return isset($this->TrackingParams) ? $this->TrackingParams : null;
    }

    /**
     * Sets TrackingParams.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTrackingParams($value = null)
    {
        $this->TrackingParams = $value;

        return $this;
    }


}

