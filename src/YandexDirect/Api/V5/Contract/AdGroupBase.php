<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AdGroupBase
{

    protected $RegionIds = null;

    protected $NegativeKeywords = null;

    /**
     * Creates a new instance of AdGroupBase.
     *
     * @return AdGroupBase
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
        return $this->RegionIds;
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
        return $this->NegativeKeywords;
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


}

