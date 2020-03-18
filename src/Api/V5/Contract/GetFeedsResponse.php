<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetFeedsResponse extends GetResponseGeneral
{

//    Can be omit.
//    protected $Feeds = null;

    /**
     * Creates a new instance of GetFeedsResponse.
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
     * @return FeedGetItem[]|null
     */
    public function getFeeds()
    {
        return isset($this->Feeds) ? $this->Feeds : null;
    }

    /**
     * Sets Feeds.
     *
     * @param FeedGetItem[]|null $value
     * @return $this
     */
    public function setFeeds(array $value = null)
    {
        $this->Feeds = $value;

        return $this;
    }


}

