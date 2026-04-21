<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TextAdGroupFeedParamsAdd
{
    /** @var int */
    protected $FeedId;

//    Can be omitted.
//    protected $FeedCategoryIds;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get FeedId
     */
    public function getFeedId(): int
    {
        return $this->FeedId;
    }

    /**
     * Set FeedId
     *
     * @return $this
     */
    public function setFeedId(int $value)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Get FeedCategoryIds
     *
     * @return non-empty-list<int>|null
     */
    public function getFeedCategoryIds(): ?array
    {
        return $this->FeedCategoryIds ?? null;
    }

    /**
     * Set FeedCategoryIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setFeedCategoryIds(?array $value)
    {
        $this->FeedCategoryIds = $value;

        return $this;
    }
}
