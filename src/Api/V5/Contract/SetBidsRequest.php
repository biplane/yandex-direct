<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetBidsRequest
{
    protected $Bids = null;

    /**
     * Creates a new instance of SetBidsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return BidSetItem[]|null
     */
    public function getBids(): ?array
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param BidSetItem[]|null $value
     *
     * @return $this
     */
    public function setBids(?array $value = null)
    {
        $this->Bids = $value;

        return $this;
    }
}
