<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DesktopAdjustmentGet
{
//    Can be omitted.
//    protected $BidModifier;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
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
}
