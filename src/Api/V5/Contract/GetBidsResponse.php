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
 * @implements IteratorAggregate<int, BidGetItem>
 */
#[AllowDynamicProperties]
class GetBidsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Bids;

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
     * Get Bids
     *
     * @return list<BidGetItem>
     */
    public function getBids(): array
    {
        return $this->Bids ?? [];
    }

    /**
     * Set Bids
     *
     * @param list<BidGetItem> $value
     *
     * @return $this
     */
    public function setBids(array $value)
    {
        $this->Bids = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->Bids) ? count($this->Bids) : 0;
    }

    /**
     * @return ArrayIterator<int, BidGetItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Bids ?? []);
    }
}
