<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicTextFeedAdGroup
{
    protected $FeedId = null;

    /**
     * Creates a new instance of DynamicTextFeedAdGroup.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FeedId.
     */
    public function getFeedId(): int
    {
        return $this->FeedId;
    }

    /**
     * Sets FeedId.
     *
     * @return $this
     */
    public function setFeedId(int $value)
    {
        $this->FeedId = $value;

        return $this;
    }
}
