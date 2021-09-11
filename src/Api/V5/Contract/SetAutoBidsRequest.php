<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SetAutoBidsRequest
{
    protected $Bids = [];

    /**
     * Creates a new instance of SetAutoBidsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Bids.
     *
     * @return BidSetAutoItem[]
     */
    public function getBids(): array
    {
        return $this->Bids;
    }

    /**
     * Sets Bids.
     *
     * @param BidSetAutoItem[] $value
     *
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }
}
