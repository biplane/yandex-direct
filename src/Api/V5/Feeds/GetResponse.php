<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Feeds;

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
 * @implements IteratorAggregate<int<0, max>, FeedGetItem>
 */
#[AllowDynamicProperties]
class GetResponse extends GetResponseGeneral implements IteratorAggregate, Countable
{
//    Can be omitted.
//    protected $Feeds;

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
     * Get Feeds
     *
     * @return list<FeedGetItem>
     */
    public function getFeeds(): array
    {
        return $this->Feeds ?? [];
    }

    /**
     * Set Feeds
     *
     * @param list<FeedGetItem> $value
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
        return isset($this->Feeds) ? count($this->Feeds) : 0;
    }

    /** @return ArrayIterator<int<0, max>, FeedGetItem> */
    #[Override]
    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->Feeds ?? []);
    }
}
