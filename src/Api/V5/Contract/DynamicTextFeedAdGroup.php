<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class DynamicTextFeedAdGroup extends DynamicAdGroup
{
    protected $FeedId = null;

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
