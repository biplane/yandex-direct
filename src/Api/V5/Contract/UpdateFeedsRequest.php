<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class UpdateFeedsRequest
{

    protected $Feeds = [];

    /**
     * Creates a new instance of UpdateFeedsRequest.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Feeds.
     *
     * @return FeedUpdateItem[]
     */
    public function getFeeds()
    {
        return $this->Feeds;
    }

    /**
     * Sets Feeds.
     *
     * @param FeedUpdateItem[] $value
     * @return $this
     */
    public function setFeeds(array $value)
    {
        $this->Feeds = $value;

        return $this;
    }


}

