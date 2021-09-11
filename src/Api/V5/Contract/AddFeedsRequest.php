<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class AddFeedsRequest
{
    protected $Feeds = [];

    /**
     * Creates a new instance of AddFeedsRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Feeds.
     *
     * @return FeedAddItem[]
     */
    public function getFeeds(): array
    {
        return $this->Feeds;
    }

    /**
     * Sets Feeds.
     *
     * @param FeedAddItem[] $value
     *
     * @return $this
     */
    public function setFeeds(array $value)
    {
        $this->Feeds = $value;

        return $this;
    }
}
