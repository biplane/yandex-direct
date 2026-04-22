<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class IncomeGradeAdjustmentAdd
{
    /** @var 'VERY_HIGH'|'HIGH'|'ABOVE_AVERAGE' */
    protected $Grade;

    /** @var int */
    protected $BidModifier;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Grade
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\IncomeGradeEnum
     *
     * @return 'VERY_HIGH'|'HIGH'|'ABOVE_AVERAGE'
     */
    public function getGrade(): string
    {
        return $this->Grade;
    }

    /**
     * Set Grade
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\IncomeGradeEnum
     *
     * @param 'VERY_HIGH'|'HIGH'|'ABOVE_AVERAGE' $value
     *
     * @return $this
     */
    public function setGrade(string $value)
    {
        $this->Grade = $value;

        return $this;
    }

    /**
     * Get BidModifier
     */
    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * Set BidModifier
     *
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
