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
 * @implements IteratorAggregate<int, KeywordBidSetAutoItem>
 */
#[AllowDynamicProperties]
class SetAutoRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<KeywordBidSetAutoItem> */
    protected $KeywordBids;

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
     * Get KeywordBids
     *
     * @return non-empty-list<KeywordBidSetAutoItem>
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids;
    }

    /**
     * Set KeywordBids
     *
     * @param non-empty-list<KeywordBidSetAutoItem> $value
     *
     * @return $this
     */
    public function setKeywordBids(array $value)
    {
        $this->KeywordBids = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->KeywordBids);
    }

    /** @return ArrayIterator<int, KeywordBidSetAutoItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->KeywordBids);
    }
}
