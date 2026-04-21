<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SerpLayoutAdjustmentAdd
{
    /** @var 'ALONE'|'SUGGEST' */
    protected $SerpLayout;

    /** @var int */
    protected $BidModifier;

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
     * @return 'ALONE'|'SUGGEST'
     */
    public function getSerpLayout(): string
    {
        return $this->SerpLayout;
    }

    /**
     * Set SerpLayout
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SerpLayoutEnum
     *
     * @param 'ALONE'|'SUGGEST' $value
     *
     * @return $this
     */
    public function setSerpLayout(string $value)
    {
        $this->SerpLayout = $value;

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
