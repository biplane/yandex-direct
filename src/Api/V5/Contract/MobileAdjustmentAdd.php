<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MobileAdjustmentAdd
{
    protected $BidModifier = null;

//    Can be omitted.
//    protected $OperatingSystemType = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
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

    /**
     * @see OperatingSystemTypeEnum
     */
    public function getOperatingSystemType(): ?string
    {
        return $this->OperatingSystemType ?? null;
    }

    /**
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
