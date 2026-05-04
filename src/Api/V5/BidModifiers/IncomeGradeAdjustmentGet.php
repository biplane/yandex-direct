<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\BidModifiers;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class IncomeGradeAdjustmentGet
{
//    Can be omitted.
//    protected $Grade;

//    Can be omitted.
//    protected $BidModifier;

//    Can be omitted.
//    protected $Enabled;

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
     * @see \Biplane\YandexDirect\Api\V5\General\IncomeGradeEnum
     *
     * @return 'VERY_HIGH'|'HIGH'|'ABOVE_AVERAGE'|null
     */
    public function getGrade(): ?string
    {
        return $this->Grade ?? null;
    }

    /**
     * Set Grade
     *
     * @see \Biplane\YandexDirect\Api\V5\General\IncomeGradeEnum
     *
     * @param 'VERY_HIGH'|'HIGH'|'ABOVE_AVERAGE'|null $value
     *
     * @return $this
     */
    public function setGrade(?string $value)
    {
        $this->Grade = $value;

        return $this;
    }

    /**
     * Get BidModifier
     */
    public function getBidModifier(): ?int
    {
        return $this->BidModifier ?? null;
    }

    /**
     * Set BidModifier
     *
     * @return $this
     */
    public function setBidModifier(?int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Get Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * Set Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\General\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setEnabled(?string $value)
    {
        $this->Enabled = $value;

        return $this;
    }
}
