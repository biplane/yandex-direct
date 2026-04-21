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
 * @implements IteratorAggregate<int, BidModifierAddItem>
 */
#[AllowDynamicProperties]
class AddBidModifiersRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<BidModifierAddItem> */
    protected $BidModifiers;

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
     * Get BidModifiers
     *
     * @return non-empty-list<BidModifierAddItem>
     */
    public function getBidModifiers(): array
    {
        return $this->BidModifiers;
    }

    /**
     * Set BidModifiers
     *
     * @param non-empty-list<BidModifierAddItem> $value
     *
     * @return $this
     */
    public function setBidModifiers(array $value)
    {
        $this->BidModifiers = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->BidModifiers);
    }

    /**
     * @return ArrayIterator<int, BidModifierAddItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->BidModifiers);
    }
}
