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

    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return $this
     */
    public function setName(string $value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * @see BusinessTypeEnum
     */
    public function getBusinessType(): string
    {
        return $this->BusinessType;
    }

    /**
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
     * @see SourceTypeEnum
     */
    public function getSourceType(): string
    {
        return $this->SourceType;
    }

    /**
     * @see SourceTypeEnum
     *
     * @return $this
     */
    public function setSourceType(string $value)
    {
        $this->SourceType = $value;

        return $this;
    }

    public function getUrlFeed(): ?UrlFeedAdd
    {
        return $this->UrlFeed ?? null;
    }

    /**
     * @return $this
     */
    public function setUrlFeed(?UrlFeedAdd $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    public function getFileFeed(): ?FileFeedAdd
    {
        return $this->FileFeed ?? null;
    }

    /**
     * @return $this
     */
    public function setFileFeed(?FileFeedAdd $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }
}
