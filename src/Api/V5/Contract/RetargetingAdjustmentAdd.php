<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RetargetingAdjustmentAdd
{
    /** @var int */
    protected $RetargetingConditionId;

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
     * Get RetargetingConditionId
     */
    public function getRetargetingConditionId(): int
    {
        return $this->RetargetingConditionId;
    }

    /**
     * Set RetargetingConditionId
     *
     * @return $this
     */
    public function setRetargetingConditionId(int $value)
    {
        $this->RetargetingConditionId = $value;

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
