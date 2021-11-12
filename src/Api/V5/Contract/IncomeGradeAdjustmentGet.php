<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class IncomeGradeAdjustmentGet
{

//    Can be omit.
//    protected $Grade = null;

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $Enabled = null;

    /**
     * Creates a new instance of IncomeGradeAdjustmentGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Grade.
     *
     * @return string|null
     * @see IncomeGradeEnum
     */
    public function getGrade()
    {
        return isset($this->Grade) ? $this->Grade : null;
    }

    /**
     * Sets Grade.
     *
     * @param string|null $value
     * @return $this
     * @see IncomeGradeEnum
     */
    public function setGrade($value = null)
    {
        $this->Grade = $value;

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
     * @return $this
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
     * @return $this
     * @see YesNoEnum
     */
    public function setEnabled($value = null)
    {
        $this->Enabled = $value;

        return $this;
    }


}

