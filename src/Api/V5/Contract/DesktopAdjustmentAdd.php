<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DesktopAdjustmentAdd
{

    protected $BidModifier = null;

    /**
     * Creates a new instance of DesktopAdjustmentAdd.
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


}

