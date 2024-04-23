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
//    protected $FeedId = null;

    public function getFeedId(): ?int
    {
        return $this->FeedId ?? null;
    }

    /**
     * @return $this
     */
    public function setFeedId(?int $value = null)
    {
        $this->FeedId = $value;

        return $this;
    }
}
