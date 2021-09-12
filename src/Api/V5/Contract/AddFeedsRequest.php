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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return FeedAddItem[]
     */
    public function getFeeds(): array
    {
        return $this->Feeds;
    }

    /**
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
