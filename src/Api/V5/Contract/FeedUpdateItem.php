<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FeedUpdateItem
{
    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $UrlFeed = null;

//    Can be omit.
//    protected $FileFeed = null;

    /**
     * Creates a new instance of FeedUpdateItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Id.
     */
    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     */
    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets UrlFeed.
     */
    public function getUrlFeed(): ?UrlFeedUpdate
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * Sets UrlFeed.
     *
     * @return $this
     */
    public function setUrlFeed(?UrlFeedUpdate $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Gets FileFeed.
     */
    public function getFileFeed(): ?FileFeedUpdate
    {
        return $this->FileFeed ?? null;
    }

    /**
     * Sets FileFeed.
     *
     * @return $this
     */
    public function setFileFeed(?FileFeedUpdate $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }
}
