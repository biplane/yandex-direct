<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateFeedsRequest
{
    protected $Feeds = [];

    /**
     * Creates a new instance of UpdateFeedsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Feeds.
     *
     * @return FeedUpdateItem[]
     */
    public function getFeeds(): array
    {
        return $this->Feeds;
    }

    /**
     * Sets Feeds.
     *
     * @param FeedUpdateItem[] $value
     *
     * @return $this
     */
    public function setFeeds(array $value)
    {
        $this->Feeds = $value;

        return $this;
    }
}
