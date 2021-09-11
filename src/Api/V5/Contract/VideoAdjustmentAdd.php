<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class VideoAdjustmentAdd
{
    protected $BidModifier = null;

    /**
     * Creates a new instance of VideoAdjustmentAdd.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BidModifier.
     */
    public function getBidModifier(): int
    {
        return $this->BidModifier;
    }

    /**
     * Sets BidModifier.
     *
     * @return $this
     */
    public function setBidModifier(int $value)
    {
        $this->BidModifier = $value;

        return $this;
    }
}
