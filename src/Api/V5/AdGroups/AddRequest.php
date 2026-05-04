<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\AdGroups;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, AdGroupAddItem>
 */
#[AllowDynamicProperties]
class AddRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<AdGroupAddItem> */
    protected $AdGroups;

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

    /** @return ArrayIterator<int<0, max>, AdGroupAddItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->AdGroups);
    }
}
