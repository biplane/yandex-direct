<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAdjustmentAdd
{

    protected $BidModifier = null;

//    Can be omit.
//    protected $OperatingSystemType = null;

    /**
     * Creates a new instance of MobileAdjustmentAdd.
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

