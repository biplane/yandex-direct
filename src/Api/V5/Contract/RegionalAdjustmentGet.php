<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RegionalAdjustmentGet
{

    protected $RegionId = null;

    protected $BidModifier = null;

    protected $Enabled = null;

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
        return $this->RegionId;
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
        return $this->BidModifier;
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
        return $this->Enabled;
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

