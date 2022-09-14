<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class IncomeGradeAdjustmentGet
{
//    Can be omitted.
//    protected $Grade = null;

//    Can be omitted.
//    protected $BidModifier = null;

//    Can be omitted.
//    protected $Enabled = null;

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
    public function getGrade(): ?string
    {
        return $this->Grade ?? null;
    }

    /**
     * @see IncomeGradeEnum
     *
     * @return $this
     */
    public function setGrade(?string $value = null)
    {
        $this->Grade = $value;

        return $this;
    }

    public function getBidModifier(): ?int
    {
        return $this->BidModifier ?? null;
    }

    /**
     * @return $this
     */
    public function setBidModifier(?int $value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * @see YesNoEnum
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setEnabled(?string $value = null)
    {
        $this->Enabled = $value;

        return $this;
    }
}
