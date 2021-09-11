<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class GetFeedsResponse extends GetResponseGeneral
{
//    Can be omit.
//    protected $Feeds = null;

    /**
     * Creates a new instance of GetFeedsResponse.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Feeds.
     *
     * @return FeedGetItem[]|null
     */
    public function getFeeds(): ?array
    {
        return $this->Feeds ?? null;
    }

    /**
     * Sets Feeds.
     *
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
