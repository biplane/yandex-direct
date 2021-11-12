<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class IncomeGradeAdjustmentAdd
{
    protected $Grade = null;

    protected $BidModifier = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see IncomeGradeEnum
     */
    public function getGrade(): string
    {
        return $this->Grade;
    }

    /**
     * @see IncomeGradeEnum
     *
     * @return $this
     */
    public function setGrade(string $value)
    {
        $this->Grade = $value;

        return $this;
    }

    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
