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
 * @implements IteratorAggregate<int, PriorityGoalsItem>
 */
#[AllowDynamicProperties]
class PriorityGoalsArray implements IteratorAggregate, Countable
{
    /** @var non-empty-list<PriorityGoalsItem> */
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
     * @return non-empty-list<PriorityGoalsItem>
     */
    public function getItems(): array
    {
        return $this->Items;
    }

    /**
     * Set Items
     *
     * @param non-empty-list<PriorityGoalsItem> $value
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
     * @return ArrayIterator<int, PriorityGoalsItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Items);
    }
}
