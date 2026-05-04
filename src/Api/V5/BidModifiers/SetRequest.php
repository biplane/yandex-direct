<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\BidModifiers;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, BidModifierSetItem>
 */
#[AllowDynamicProperties]
class SetRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<BidModifierSetItem> */
    protected $BidModifiers;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get BidModifiers
     *
     * @return non-empty-list<BidModifierSetItem>
     */
    public function getBidModifiers(): array
    {
        return $this->BidModifiers;
    }

    /**
     * Set BidModifiers
     *
     * @param non-empty-list<BidModifierSetItem> $value
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

    /** @return ArrayIterator<int<0, max>, BidModifierSetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->BidModifiers);
    }
}
