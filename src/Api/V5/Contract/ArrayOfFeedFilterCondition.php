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
 * @implements IteratorAggregate<int, FeedFilterConditionItem>
 */
#[AllowDynamicProperties]
class ArrayOfFeedFilterCondition implements IteratorAggregate, Countable
{
    /** @var non-empty-list<FeedFilterConditionItem> */
    protected $Items;

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
     * Get Items
     *
     * @return non-empty-list<FeedFilterConditionItem>
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Set Items
     *
     * @param non-empty-list<FeedFilterConditionItem> $value
     *
     * @return $this
     */
    public function setItems(array $value)
    {
        $this->Items = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Items);
    }

    /**
     * @return ArrayIterator<int, FeedFilterConditionItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Items);
    }
}
