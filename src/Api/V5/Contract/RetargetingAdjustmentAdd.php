<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingAdjustmentAdd
{

    protected $RetargetingConditionId = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of RetargetingAdjustmentAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RetargetingConditionId.
     *
     * @return int
     */
    public function getRetargetingConditionId()
    {
        return $this->RetargetingConditionId;
    }

    /**
     * Sets RetargetingConditionId.
     *
     * @param int $value
     * @return self
     */
    public function setRetargetingConditionId($value)
    {
        $this->RetargetingConditionId = $value;

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
     * @return self
     */
    public function setBidModifier($value)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

