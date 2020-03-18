<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Sets Name.
     *
     * @param string $value
     * @return $this
     */
    public function setName($value)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets BusinessType.
     *
     * @return string
     * @see BusinessTypeEnum
     */
    public function getBusinessType()
    {
        return $this->BusinessType;
    }

    /**
     * Sets BusinessType.
     *
     * @param string $value
     * @return $this
     * @see BusinessTypeEnum
     */
    public function setBusinessType($value)
    {
        $this->BusinessType = $value;

        return $this;
    }

    /**
     * Gets SourceType.
     *
     * @return string
     * @see SourceTypeEnum
     */
    public function getSourceType()
    {
        return $this->SourceType;
    }

    /**
     * Sets SourceType.
     *
     * @param string $value
     * @return $this
     * @see SourceTypeEnum
     */
    public function setSourceType($value)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Gets UrlFeed.
     *
     * @return UrlFeedAdd|null
     */
    public function getUrlFeed()
    {
        return isset($this->UrlFeed) ? $this->UrlFeed : null;
    }

    /**
     * Sets UrlFeed.
     *
     * @param UrlFeedAdd|null $value
     * @return $this
     */
    public function setUrlFeed(UrlFeedAdd $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Gets FileFeed.
     *
     * @return FileFeedAdd|null
     */
    public function getFileFeed()
    {
        return isset($this->FileFeed) ? $this->FileFeed : null;
    }

    /**
     * Sets FileFeed.
     *
     * @param FileFeedAdd|null $value
     * @return $this
     */
    public function setFileFeed(FileFeedAdd $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }


}

