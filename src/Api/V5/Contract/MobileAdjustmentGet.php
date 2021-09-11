<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAdjustmentGet
{
//    Can be omit.
//    protected $BidModifier = null;

//    Can be omit.
//    protected $OperatingSystemType = null;

    /**
     * Creates a new instance of MobileAdjustmentGet.
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

    /**
     * Gets OperatingSystemType.
     *
     * @see OperatingSystemTypeEnum
     */
    public function getOperatingSystemType(): ?string
    {
        return $this->OperatingSystemType ?? null;
    }

    /**
     * Sets OperatingSystemType.
     *
     * @see OperatingSystemTypeEnum
     *
     * @return $this
     */
    public function setOperatingSystemType(?string $value = null)
    {
        $this->OperatingSystemType = $value;

        return $this;
    }
}
