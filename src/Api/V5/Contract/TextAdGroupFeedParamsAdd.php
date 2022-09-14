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
    protected $FeedId = null;

//    Can be omitted.
//    protected $FeedCategoryIds = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getFeedId(): int
    {
        return $this->FeedId;
    }

    /**
     * @return $this
     */
    public function setFeedId(int $value)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * @return float[]|null
     */
    public function getFeedCategoryIds(): ?array
    {
        return $this->FeedCategoryIds ?? null;
    }

    /**
     * @param float[]|null $value
     *
     * @return $this
     */
    public function setFeedCategoryIds(?array $value = null)
    {
        $this->FeedCategoryIds = $value;

        return $this;
    }
}
