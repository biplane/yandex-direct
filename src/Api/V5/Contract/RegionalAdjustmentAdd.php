<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RegionalAdjustmentAdd
{

    protected $RegionId = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of RegionalAdjustmentAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RegionId.
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->RegionId;
    }

    /**
     * Sets RegionId.
     *
     * @param int $value
     * @return $this
     */
    public function setRegionId($value)
    {
        $this->RegionId = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     *
     * @return int
     */
    public function getBidModifier()
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @param int $value
     * @return $this
     */
    public function setBidModifier($value)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

