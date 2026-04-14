<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int, AuctionBidItem>
 */
#[AllowDynamicProperties]
class AuctionBids implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $AuctionBidItems;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get AuctionBidItems
     *
     * @return list<AuctionBidItem>
     */
    public function getAuctionBidItems(): array
    {
        return $this->AuctionBidItems ?? [];
    }

    /**
     * Set AuctionBidItems
     *
     * @param list<AuctionBidItem> $value
     *
     * @return $this
     */
    public function setAuctionBidItems(array $value)
    {
        $this->AuctionBidItems = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->AuctionBidItems) ? count($this->AuctionBidItems) : 0;
    }

    /**
     * @return ArrayIterator<int, AuctionBidItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AuctionBidItems ?? []);
    }
}
