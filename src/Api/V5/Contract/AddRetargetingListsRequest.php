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
 * @implements IteratorAggregate<int, RetargetingListAddItem>
 */
#[AllowDynamicProperties]
class AddRetargetingListsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<RetargetingListAddItem> */
    protected $RetargetingLists;

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
     * Get RetargetingLists
     *
     * @return non-empty-list<RetargetingListAddItem>
     */
    public function getRetargetingLists(): array
    {
        return $this->RetargetingLists;
    }

    /**
     * Set RetargetingLists
     *
     * @param non-empty-list<RetargetingListAddItem> $value
     *
     * @return $this
     */
    public function setRetargetingLists(array $value)
    {
        $this->RetargetingLists = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->RetargetingLists);
    }

    /** @return ArrayIterator<int, RetargetingListAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->RetargetingLists);
    }
}
