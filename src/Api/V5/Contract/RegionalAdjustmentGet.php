<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class RegionalAdjustmentGet
{
//    Can be omitted.
//    protected $RegionId = null;

//    Can be omitted.
//    protected $BidModifier = null;

//    Can be omitted.
//    protected $Enabled = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRegionId(): ?int
    {
        return $this->RegionId ?? null;
    }

    /**
     * @return $this
     */
    public function setRegionId(?int $value = null)
    {
        $this->RegionId = $value;

        return $this;
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

    /**
     * @see YesNoEnum
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
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
