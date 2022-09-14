<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetFeedsResponse extends GetResponseGeneral
{
//    Can be omitted.
//    protected $Feeds = null;

    /**
     * @return FeedGetItem[]|null
     */
    public function getFeeds(): ?array
    {
        return $this->Feeds ?? null;
    }

    /**
     * @param FeedGetItem[]|null $value
     *
     * @return $this
     */
    public function setFeeds(?array $value = null)
    {
        $this->Feeds = $value;

        return $this;
    }
}
