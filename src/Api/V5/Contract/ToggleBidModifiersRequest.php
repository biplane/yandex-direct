<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ToggleBidModifiersRequest
{
    protected $BidModifierToggleItems = [];

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return BidModifierToggleItem[]
     */
    public function getBidModifierToggleItems(): array
    {
        return $this->BidModifierToggleItems;
    }

    /**
     * @param BidModifierToggleItem[] $value
     *
     * @return $this
     */
    public function setBidModifierToggleItems(array $value)
    {
        $this->BidModifierToggleItems = $value;

        return $this;
    }
}
