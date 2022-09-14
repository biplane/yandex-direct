<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class AddBidModifiersRequest
{
    protected $BidModifiers = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return BidModifierAddItem[]
     */
    public function getBidModifiers(): array
    {
        return $this->BidModifiers;
    }

    /**
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
