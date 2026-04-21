<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SerpLayoutAdjustmentGet
{
//    Can be omitted.
//    protected $SerpLayout;

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
     * Get SerpLayout
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum
     *
     * @return 'ALONE'|'SUGGEST'|null
     */
    public function getSerpLayout(): ?string
    {
        return $this->SerpLayout ?? null;
    }

    /**
     * Set SerpLayout
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum
     *
     * @param 'ALONE'|'SUGGEST'|null $value
     *
     * @return $this
     */
    public function setSerpLayout(?string $value)
    {
        $this->SerpLayout = $value;

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
