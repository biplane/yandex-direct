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
 * @implements IteratorAggregate<int, NegativeKeywordSharedSetGetItem>
 */
#[AllowDynamicProperties]
class GetNegativeKeywordSharedSetsResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $NegativeKeywordSharedSets;

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
     * Get NegativeKeywordSharedSets
     *
     * @return list<NegativeKeywordSharedSetGetItem>
     */
    public function getNegativeKeywordSharedSets(): array
    {
        return $this->NegativeKeywordSharedSets ?? [];
    }

    /**
     * Set NegativeKeywordSharedSets
     *
     * @param list<NegativeKeywordSharedSetGetItem> $value
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
        return isset($this->NegativeKeywordSharedSets) ? count($this->NegativeKeywordSharedSets) : 0;
    }

    /** @return ArrayIterator<int, NegativeKeywordSharedSetGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->NegativeKeywordSharedSets ?? []);
    }
}
