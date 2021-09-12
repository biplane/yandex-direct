<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidModifiersResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $BidModifiers = null;

    /**
     * @return BidModifierGetItem[]|null
     */
    public function getBidModifiers(): ?array
    {
        return $this->BidModifiers ?? null;
    }

    /**
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
