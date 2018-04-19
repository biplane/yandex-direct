<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RegionalAdjustmentGet
{

//    Can be omit.
//    protected $RegionId = null;

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $Enabled = null;

    /**
     * Creates a new instance of RegionalAdjustmentGet.
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
     * @return int|null
     */
    public function getRegionId()
    {
        return isset($this->RegionId) ? $this->RegionId : null;
    }

    /**
     * Sets RegionId.
     *
     * @param int|null $value
     * @return self
     */
    public function setRegionId($value = null)
    {
        $this->RegionId = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     *
     * @return int|null
     */
    public function getBidModifier()
    {
        return isset($this->BidModifier) ? $this->BidModifier : null;
    }

    /**
     * Sets BidModifier.
     *
     * @param int|null $value
     * @return self
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getEnabled()
    {
        return isset($this->Enabled) ? $this->Enabled : null;
    }

    /**
     * Sets Enabled.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setEnabled($value = null)
    {
        $this->Enabled = $value;

        return $this;
    }


}

