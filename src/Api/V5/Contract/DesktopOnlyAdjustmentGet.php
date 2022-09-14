<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DesktopOnlyAdjustmentGet
{
//    Can be omitted.
//    protected $BidModifier = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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
}
