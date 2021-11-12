<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGroupFeedParamsUpdate
{

    protected $FeedId = null;

//    Can be omit.
//    protected $FeedCategoryIds = null;

    /**
     * Creates a new instance of TextAdGroupFeedParamsUpdate.
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
     * @return int|null
     */
    public function getFeedId()
    {
        return $this->FeedId;
    }

    /**
     * Sets FeedId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setFeedId($value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Gets FeedCategoryIds.
     *
     * @return float[]|null
     */
    public function getFeedCategoryIds()
    {
        return isset($this->FeedCategoryIds) ? $this->FeedCategoryIds : null;
    }

    /**
     * Sets FeedCategoryIds.
     *
     * @param float[]|null $value
     * @return $this
     */
    public function setFeedCategoryIds(array $value = null)
    {
        $this->FeedCategoryIds = $value;

        return $this;
    }


}

