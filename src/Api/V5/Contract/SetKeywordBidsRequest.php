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
 * @implements IteratorAggregate<int, KeywordBidSetItem>
 */
#[AllowDynamicProperties]
class SetKeywordBidsRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<KeywordBidSetItem> */
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
     * @return non-empty-list<KeywordBidSetItem>
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids;
    }

    /**
     * Set KeywordBids
     *
     * @param non-empty-list<KeywordBidSetItem> $value
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

    /** @return ArrayIterator<int, KeywordBidSetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->KeywordBids);
    }
}
