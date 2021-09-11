<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RetargetingConditionId.
     */
    public function getRetargetingConditionId(): ?int
    {
        return $this->RetargetingConditionId ?? null;
    }

    /**
     * Sets RetargetingConditionId.
     *
     * @return $this
     */
    public function setRetargetingConditionId(?int $value = null)
    {
        $this->RetargetingConditionId = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     */
    public function getBidModifier(): ?int
    {
        return $this->BidModifier ?? null;
    }

    /**
     * Sets BidModifier.
     *
     * @return $this
     */
    public function setBidModifier(?int $value = null)
    {
        $this->BidModifier = $value;

        return $this;
    }

    /**
     * Gets Accessible.
     *
     * @see YesNoEnum
     */
    public function getAccessible(): ?string
    {
        return $this->Accessible ?? null;
    }

    /**
     * Sets Accessible.
     *
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
     * Gets Enabled.
     *
     * @see YesNoEnum
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * Sets Enabled.
     *
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
