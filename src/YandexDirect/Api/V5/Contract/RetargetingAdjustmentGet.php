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
     * @return self
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
     * @return self
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
     * @return self
     */
    public function setBidModifier($value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Accessible.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAccessible()
    {
        return $this->Accessible;
    }

    /**
     * Sets Accessible.
     *
     * @param string|null $value
     * @return self
     * @see YesNoEnum
     */
    public function setAccessible($value = null)
    {
        $this->Accessible = $value;

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

