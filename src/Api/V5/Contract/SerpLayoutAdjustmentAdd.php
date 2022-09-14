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
    protected $SerpLayout = null;

    protected $BidModifier = null;

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
    public function getSerpLayout(): string
    {
        return $this->SerpLayout;
    }

    /**
     * @see SerpLayoutEnum
     *
     * @return $this
     */
    public function setSerpLayout(string $value)
    {
        $this->SerpLayout = $value;

        return $this;
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
}
