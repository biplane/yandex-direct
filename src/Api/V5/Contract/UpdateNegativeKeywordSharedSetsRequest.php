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
 * @implements IteratorAggregate<int, NegativeKeywordSharedSetUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateNegativeKeywordSharedSetsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<NegativeKeywordSharedSetUpdateItem> */
    protected $NegativeKeywordSharedSets;

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
     * Get NegativeKeywordSharedSets
     *
     * @return non-empty-list<NegativeKeywordSharedSetUpdateItem>
     */
    public function getNegativeKeywordSharedSets(): array
    {
        return $this->NegativeKeywordSharedSets;
    }

    /**
     * Set NegativeKeywordSharedSets
     *
     * @param non-empty-list<NegativeKeywordSharedSetUpdateItem> $value
     *
     * @return $this
     */
    public function setNegativeKeywordSharedSets(array $value)
    {
        $this->NegativeKeywordSharedSets = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->NegativeKeywordSharedSets);
    }

    /** @return ArrayIterator<int, NegativeKeywordSharedSetUpdateItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->NegativeKeywordSharedSets);
    }
}
