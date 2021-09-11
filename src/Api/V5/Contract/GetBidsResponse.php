<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetBidsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Bids = null;

    /**
     * Creates a new instance of GetBidsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return BidGetItem[]|null
     */
    public function getBids(): ?array
    {
        return $this->Bids ?? null;
    }

    /**
     * Sets Bids.
     *
     * @param BidGetItem[]|null $value
     *
     * @return $this
     */
    public function setBids(?array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }
}
