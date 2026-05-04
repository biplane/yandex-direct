<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Feeds;

use AllowDynamicProperties;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Override;

use function count;

/**
 * Auto-generated code.
 *
 * @implements IteratorAggregate<int<0, max>, FeedUpdateItem>
 */
#[AllowDynamicProperties]
class UpdateRequest implements IteratorAggregate, Countable
{
    /** @var non-empty-list<FeedUpdateItem> */
    protected $Feeds;

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
     * Get Feeds
     *
     * @return non-empty-list<FeedUpdateItem>
     */
    public function getFeeds(): array
    {
        return $this->Feeds;
    }

    /**
     * Set Feeds
     *
     * @param non-empty-list<FeedUpdateItem> $value
     *
     * @return $this
     */
    public function setFeeds(array $value)
    {
        $this->Feeds = $value;

        return $this;
    }

    #[Override]
    public function count(): int
    {
        return count($this->Feeds);
    }

    /** @return ArrayIterator<int<0, max>, FeedUpdateItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Feeds);
    }
}
