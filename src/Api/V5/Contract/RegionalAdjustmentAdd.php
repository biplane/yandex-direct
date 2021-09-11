<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RegionalAdjustmentAdd
{
    protected $RegionId = null;

    protected $BidModifier = null;

    /**
     * Creates a new instance of RegionalAdjustmentAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RegionId.
     */
    public function getRegionId(): int
    {
        return $this->RegionId;
    }

    /**
     * Sets RegionId.
     *
     * @return $this
     */
    public function setRegionId(int $value)
    {
        $this->RegionId = $value;

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
