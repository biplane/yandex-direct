<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextFeedAdGroup
{

    protected $FeedId = null;

    /**
     * Creates a new instance of DynamicTextFeedAdGroup.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FeedId.
     *
     * @return int
     */
    public function getFeedId()
    {
        return $this->FeedId;
    }

    /**
     * Sets FeedId.
     *
     * @param int $value
     * @return $this
     */
    public function setFeedId($value)
    {
        $this->FeedId = $value;

        return $this;
    }


}

