<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FeedAddItem
{
    protected $Name = null;

    protected $BusinessType = null;

    protected $SourceType = null;

//    Can be omit.
//    protected $UrlFeed = null;

//    Can be omit.
//    protected $FileFeed = null;

    /**
     * Creates a new instance of FeedAddItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Name.
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets BusinessType.
     *
     * @see BusinessTypeEnum
     */
    public function getBusinessType(): string
    {
        return $this->BusinessType;
    }

    /**
     * Sets BusinessType.
     *
     * @see BusinessTypeEnum
     *
     * @return $this
     */
    public function setBusinessType(string $value)
    {
        $this->BusinessType = $value;

        return $this;
    }

    /**
     * Gets SourceType.
     *
     * @see SourceTypeEnum
     */
    public function getSourceType(): string
    {
        return $this->SourceType;
    }

    /**
     * Sets SourceType.
     *
     * @see SourceTypeEnum
     *
     * @return $this
     */
    public function setSourceType(string $value)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Gets UrlFeed.
     */
    public function getUrlFeed(): ?UrlFeedAdd
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * Sets UrlFeed.
     *
     * @return $this
     */
    public function setUrlFeed(?UrlFeedAdd $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Gets FileFeed.
     */
    public function getFileFeed(): ?FileFeedAdd
    {
        return $this->FileFeed ?? null;
    }

    /**
     * Sets FileFeed.
     *
     * @return $this
     */
    public function setFileFeed(?FileFeedAdd $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }
}
