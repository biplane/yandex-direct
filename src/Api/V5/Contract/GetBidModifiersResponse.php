<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidModifiersResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $BidModifiers = null;

    /**
     * Creates a new instance of GetBidModifiersResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets BidModifiers.
     *
     * @return BidModifierGetItem[]|null
     */
    public function getBidModifiers(): ?array
    {
        return $this->BidModifiers ?? null;
    }

    /**
     * Sets BidModifiers.
     *
     * @param BidModifierGetItem[]|null $value
     *
     * @return $this
     */
    public function setBidModifiers(?array $value = null)
    {
        $this->BidModifiers = $value;

        return $this;
    }
}
