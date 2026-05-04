<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\KeywordBids;

use AllowDynamicProperties;
use ArrayIterator;
use Biplane\YandexDirect\Api\V5\General\GetResponseGeneral;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, KeywordBidGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $KeywordBids;

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
     * Get KeywordBids
     *
     * @return list<KeywordBidGetItem>
     */
    public function getKeywordBids(): array
    {
        return $this->KeywordBids ?? [];
    }

    /**
     * Set KeywordBids
     *
     * @param list<KeywordBidGetItem> $value
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
        return isset($this->KeywordBids) ? count($this->KeywordBids) : 0;
    }

    /** @return ArrayIterator<int<0, max>, KeywordBidGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->KeywordBids ?? []);
    }
}
