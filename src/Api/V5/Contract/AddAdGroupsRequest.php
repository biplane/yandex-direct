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
 * @implements IteratorAggregate<int, AdGroupAddItem>
 */
#[AllowDynamicProperties]
class AddAdGroupsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AdGroupAddItem> */
    protected $AdGroups;

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
     * Get AdGroups
     *
     * @return non-empty-list<AdGroupAddItem>
     */
    public function getAdGroups(): array
    {
        return $this->AdGroups;
    }

    /**
     * Set AdGroups
     *
     * @param non-empty-list<AdGroupAddItem> $value
     *
     * @return $this
     */
    public function setAdGroups(array $value)
    {
        $this->AdGroups = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->AdGroups);
    }

    /**
     * @return ArrayIterator<int, AdGroupAddItem>
     */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdGroups);
    }
}
