<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RetargetingAdjustmentAdd
{
    protected $RetargetingConditionId = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of RetargetingAdjustmentAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RetargetingConditionId.
     */
    public function getRetargetingConditionId(): int
    {
        return $this->RetargetingConditionId;
    }

    /**
     * Sets RetargetingConditionId.
     *
     * @return $this
     */
    public function setRetargetingConditionId(int $value)
    {
        $this->RetargetingConditionId = $value;

        return $this;
    }

    /**
     * Gets BidModifier.
     */
    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
