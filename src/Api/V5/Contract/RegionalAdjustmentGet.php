<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class RegionalAdjustmentGet
{
//    Can be omit.
//    protected $RegionId = null;

//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $Enabled = null;

    /**
     * Creates a new instance of RegionalAdjustmentGet.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets RegionId.
     */
    public function getRegionId(): ?int
    {
        return $this->RegionId ?? null;
    }

    /**
     * Sets RegionId.
     *
     * @return $this
     */
    public function setRegionId(?int $value = null)
    {
        $this->RegionId = $value;

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
