<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAdjustmentGet
{
//    Can be omitted.
//    protected $BidModifier;

//    Can be omitted.
//    protected $OperatingSystemType;

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

    /**
     * Get OperatingSystemType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\OperatingSystemTypeEnum
     *
     * @return 'IOS'|'ANDROID'|null
     */
    public function getOperatingSystemType(): ?string
    {
        return $this->OperatingSystemType ?? null;
    }

    /**
     * Set OperatingSystemType
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\OperatingSystemTypeEnum
     *
     * @param 'IOS'|'ANDROID'|null $value
     *
     * @return $this
     */
    public function setOperatingSystemType(?string $value)
    {
        $this->OperatingSystemType = $value;

        return $this;
    }
}
