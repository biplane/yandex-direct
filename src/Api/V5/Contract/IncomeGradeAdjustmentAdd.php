<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class IncomeGradeAdjustmentAdd
{

    protected $Grade = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of IncomeGradeAdjustmentAdd.
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
     * @return string
     * @see IncomeGradeEnum
     */
    public function getGrade()
    {
        return $this->Grade;
    }

    /**
     * Sets Grade.
     *
     * @param string $value
     * @return $this
     * @see IncomeGradeEnum
     */
    public function setGrade($value)
    {
        $this->Grade = $value;

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
     * @return $this
     */
    public function setBidModifier($value)
    {
        $this->BidModifier = $value;

        return $this;
    }


}

