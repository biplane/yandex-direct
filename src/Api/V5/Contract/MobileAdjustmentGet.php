<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAdjustmentGet
{

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $OperatingSystemType = null;

    /**
     * Creates a new instance of MobileAdjustmentGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * @return $this
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets OperatingSystemType.
     *
     * @return string|null
     * @see OperatingSystemTypeEnum
     */
    public function getOperatingSystemType()
    {
        return isset($this->OperatingSystemType) ? $this->OperatingSystemType : null;
    }

    /**
     * Sets OperatingSystemType.
     *
     * @param string|null $value
     * @return $this
     * @see OperatingSystemTypeEnum
     */
    public function setOperatingSystemType($value = null)
    {
        $this->OperatingSystemType = $value;

        return $this;
    }


}

