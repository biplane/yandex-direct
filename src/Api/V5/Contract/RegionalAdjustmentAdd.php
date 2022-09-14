<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RegionalAdjustmentAdd
{
    protected $RegionId = null;

    protected $BidModifier = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRegionId(): int
    {
        return $this->RegionId;
    }

    /**
     * @return $this
     */
    public function setRegionId(int $value)
    {
        $this->RegionId = $value;

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
