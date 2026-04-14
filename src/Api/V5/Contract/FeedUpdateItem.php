<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FeedUpdateItem
{
    /** @var int */
    protected $Id;

//    Can be omitted.
//    protected $Name;

//    Can be omitted.
//    protected $UrlFeed;

//    Can be omitted.
//    protected $FileFeed;

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
     * Get Id
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Set Id
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Get Name
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Set Name
     *
     * @return $this
     */
    public function setName(?string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Get UrlFeed
     */
    public function getUrlFeed(): ?UrlFeedUpdate
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * Set UrlFeed
     *
     * @return $this
     */
    public function setUrlFeed(?UrlFeedUpdate $value)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Get FileFeed
     */
    public function getFileFeed(): ?FileFeedUpdate
    {
        return $this->FileFeed ?? null;
    }

    /**
     * Set FileFeed
     *
     * @return $this
     */
    public function setFileFeed(?FileFeedUpdate $value)
    {
        $this->FileFeed = $value;

        return $this;
    }
}
