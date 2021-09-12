<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingAdjustmentGet
{
//    Can be omitted.
//    protected $RetargetingConditionId = null;

//    Can be omitted.
//    protected $BidModifier = null;

//    Can be omitted.
//    protected $Accessible = null;

//    Can be omitted.
//    protected $Enabled = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRetargetingConditionId(): ?int
    {
        return $this->RetargetingConditionId ?? null;
    }

    /**
     * @return $this
     */
    public function setRetargetingConditionId(?int $value = null)
    {
        $this->RetargetingConditionId = $value;

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
    public function getAccessible(): ?string
    {
        return $this->Accessible ?? null;
    }

    /**
     * @see YesNoEnum
     *
     * @return $this
     */
    public function setAccessible(?string $value = null)
    {
        $this->Accessible = $value;

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
