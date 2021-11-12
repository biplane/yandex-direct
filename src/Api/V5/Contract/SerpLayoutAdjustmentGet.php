<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SerpLayoutAdjustmentGet
{
//    Can be omitted.
//    protected $SerpLayout = null;

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

    /**
     * @see SerpLayoutEnum
     */
    public function getSerpLayout(): ?string
    {
        return $this->SerpLayout ?? null;
    }

    /**
     * @see SerpLayoutEnum
     *
     * @return $this
     */
    public function setSerpLayout(?string $value = null)
    {
        $this->SerpLayout = $value;

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
