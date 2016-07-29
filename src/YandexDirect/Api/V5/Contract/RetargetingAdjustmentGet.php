<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingAdjustmentGet
{

    protected $RetargetingConditionId = null;

    protected $BidModifier = null;

    protected $Accessible = null;

    protected $Enabled = null;

    /**
     * Creates a new instance of RetargetingAdjustmentGet.
     *
     * @return RetargetingAdjustmentGet
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets RetargetingConditionId.
     *
     * @return int|null
     */
    public function getRetargetingConditionId()
    {
        return $this->RetargetingConditionId;
    }

    /**
     * Sets RetargetingConditionId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setRetargetingConditionId($value = null)
    {
        $this->RetargetingConditionId = $value;

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
     * @return $this
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Accessible.
     *
     * @return YesNoEnum|null
     */
    public function getAccessible()
    {
        return $this->Accessible;
    }

    /**
     * Sets Accessible.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setAccessible($value = null)
    {
        $this->Accessible = $value;

        return $this;
    }

    /**
     * Gets Enabled.
     *
     * @return YesNoEnum|null
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }

    /**
     * Sets Enabled.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setEnabled($value = null)
    {
        $this->Enabled = $value;

        return $this;
    }


}

