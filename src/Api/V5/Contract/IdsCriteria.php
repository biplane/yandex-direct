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
 * @implements IteratorAggregate<int, int>
 */
#[AllowDynamicProperties]
class IdsCriteria implements IteratorAggregate, Countable
{
    /** @var non-empty-list<int> */
    protected $Ids;

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
     * Get Ids
     *
     * @return non-empty-list<int>
     */
    public function getIds(): array
    {
        return $this->Ids;
    }

    /**
     * Set Ids
     *
     * @param non-empty-list<int> $value
     *
     * @return $this
     */
    public function setIds(array $value)
    {
        $this->Ids = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Ids);
    }

    /** @return ArrayIterator<int, int> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Ids);
    }
}
