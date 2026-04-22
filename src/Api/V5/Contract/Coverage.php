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
 * @implements IteratorAggregate<int, NetworkCoverageItem>
 */
#[AllowDynamicProperties]
class Coverage implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $CoverageItems;

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
     * Get CoverageItems
     *
     * @return list<NetworkCoverageItem>
     */
    public function getCoverageItems(): array
    {
        return $this->CoverageItems ?? [];
    }

    /**
     * Set CoverageItems
     *
     * @param list<NetworkCoverageItem> $value
     *
     * @return $this
     */
    public function setCoverageItems(array $value)
    {
        $this->CoverageItems = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return isset($this->CoverageItems) ? count($this->CoverageItems) : 0;
    }

    /** @return ArrayIterator<int, NetworkCoverageItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->CoverageItems ?? []);
    }
}
