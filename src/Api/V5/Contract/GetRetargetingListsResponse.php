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
 * @implements IteratorAggregate<int, RetargetingListGetItem>
 */
#[AllowDynamicProperties]
class GetRetargetingListsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $RetargetingLists;

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
     * Get RetargetingLists
     *
     * @return list<RetargetingListGetItem>
     */
    public function getRetargetingLists(): array
    {
        return $this->RetargetingLists ?? [];
    }

    /**
     * Set RetargetingLists
     *
     * @param list<RetargetingListGetItem> $value
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
        return isset($this->RetargetingLists) ? count($this->RetargetingLists) : 0;
    }

    /** @return ArrayIterator<int, RetargetingListGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->RetargetingLists ?? []);
    }
}
