<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextFeedAdGroupUpdate extends DynamicAdGroup
{
//    Can be omitted.
//    protected $FeedId;

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
    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * Set FeedId
     *
     * @return $this
     */
    public function setFeedId(?int $value)
    {
        $this->FeedId = $value;

        return $this;
    }
}
