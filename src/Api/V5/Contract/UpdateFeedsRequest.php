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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return FeedUpdateItem[]
     */
    public function getFeeds(): array
    {
        return $this->Feeds;
    }

    /**
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
