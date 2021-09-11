<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidModifiersRequest
{
    protected $BidModifiers = [];

    /**
     * Creates a new instance of SetBidModifiersRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BidModifiers.
     *
     * @return BidModifierSetItem[]
     */
    public function getBidModifiers(): array
    {
        return $this->BidModifiers;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierSetItem[] $value
     *
     * @return $this
     */
    public function setBidModifiers(array $value)
    {
        $this->BidModifiers = $value;

        return $this;
    }
}
