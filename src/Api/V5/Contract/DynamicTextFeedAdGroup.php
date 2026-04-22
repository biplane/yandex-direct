<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextFeedAdGroup extends DynamicAdGroup
{
    /** @var int */
    protected $FeedId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
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
}
