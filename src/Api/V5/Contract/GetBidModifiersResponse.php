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
 * @implements IteratorAggregate<int, BidModifierGetItem>
 */
#[AllowDynamicProperties]
class GetBidModifiersResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $BidModifiers;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get BidModifiers
     *
     * @return list<BidModifierGetItem>
     */
    public function getBidModifiers(): array
    {
        return $this->BidModifiers ?? [];
    }

    /**
     * Set BidModifiers
     *
     * @param list<BidModifierGetItem> $value
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
        return isset($this->BidModifiers) ? count($this->BidModifiers) : 0;
    }

    /** @return ArrayIterator<int, BidModifierGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->BidModifiers ?? []);
    }
}
