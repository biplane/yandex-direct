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
    /** @var int */
    protected $RegionId;

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
     * Get RegionId
     */
    public function getRegionId(): int
    {
        return $this->RegionId;
    }

    /**
     * Set RegionId
     *
     * @return $this
     */
    public function setRegionId(int $value)
    {
        $this->RegionId = $value;

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
