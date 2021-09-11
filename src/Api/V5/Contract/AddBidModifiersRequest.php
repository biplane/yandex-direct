<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddBidModifiersRequest
{
    protected $BidModifiers = [];

    /**
     * Creates a new instance of AddBidModifiersRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BidModifiers.
     *
     * @return BidModifierAddItem[]
     */
    public function getBidModifiers(): array
    {
        return $this->BidModifiers;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierAddItem[] $value
     *
     * @return $this
     */
    public function setBidModifiers(array $value)
    {
        $this->BidModifiers = $value;

        return $this;
    }
}
