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
    protected $RetargetingConditionId = null;

    protected $BidModifier = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRetargetingConditionId(): int
    {
        return $this->RetargetingConditionId;
    }

    /**
     * @return $this
     */
    public function setRetargetingConditionId(int $value)
    {
        $this->RetargetingConditionId = $value;

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
