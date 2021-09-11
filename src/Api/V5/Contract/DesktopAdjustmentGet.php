<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DesktopAdjustmentGet
{
//    Can be omit.
//    protected $BidModifier = null;

    /**
     * Creates a new instance of DesktopAdjustmentGet.
     */
    public static function create(): self
    {
        return new self();
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
}
