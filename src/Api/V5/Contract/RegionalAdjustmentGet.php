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
//    protected $RegionId;

//    Can be omitted.
//    protected $BidModifier;

//    Can be omitted.
//    protected $Enabled;

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
     * Get RegionId
     */
    public function getRegionId(): ?int
    {
        return $this->RegionId ?? null;
    }

    /**
     * Set RegionId
     *
     * @return $this
     */
    public function setRegionId(?int $value)
    {
        $this->RegionId = $value;

        return $this;
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
     * Get Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @return 'YES'|'NO'|null
     */
    public function getEnabled(): ?string
    {
        return $this->Enabled ?? null;
    }

    /**
     * Set Enabled
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\YesNoEnum
     *
     * @param 'YES'|'NO'|null $value
     *
     * @return $this
     */
    public function setEnabled(?string $value)
    {
        $this->Enabled = $value;

        return $this;
    }
}
