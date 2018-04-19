<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingAdjustmentGet
{

//    Can be omit.
//    protected $RetargetingConditionId = null;

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $Accessible = null;

//    Can be omit.
//    protected $Enabled = null;

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
        return isset($this->RetargetingConditionId) ? $this->RetargetingConditionId : null;
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
     * Gets Accessible.
     *
     * @return string|null
     * @see YesNoEnum
     */
    public function getAccessible()
    {
        return isset($this->Accessible) ? $this->Accessible : null;
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

