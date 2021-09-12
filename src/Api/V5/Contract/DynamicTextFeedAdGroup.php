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
}
