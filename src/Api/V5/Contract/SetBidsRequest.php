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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return BidSetItem[]|null
     */
    public function getBids(): ?array
    {
        return $this->Bids;
    }

    /**
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
