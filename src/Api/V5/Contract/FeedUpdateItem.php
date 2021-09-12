<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FeedUpdateItem
{
    protected $Id = null;

//    Can be omitted.
//    protected $Name = null;

//    Can be omitted.
//    protected $UrlFeed = null;

//    Can be omitted.
//    protected $FileFeed = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getId(): int
    {
        return $this->Id;
    }

    /**
     * @return $this
     */
    public function setId(int $value)
    {
        $this->Id = $value;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->Name ?? null;
    }

    /**
     * @return $this
     */
    public function setName(?string $value = null)
    {
        $this->Name = $value;

        return $this;
    }

    public function getUrlFeed(): ?UrlFeedUpdate
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * @return $this
     */
    public function setUrlFeed(?UrlFeedUpdate $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    public function getFileFeed(): ?FileFeedUpdate
    {
        return $this->FileFeed ?? null;
    }

    /**
     * @return $this
     */
    public function setFileFeed(?FileFeedUpdate $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }
}
