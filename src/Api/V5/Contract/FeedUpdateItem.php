<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Sets Id.
     *
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->Id = $value;

        return $this;
    }

    /**
     * Gets Name.
     *
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }

    /**
     * Sets Name.
     *
     * @param string|null $value
     * @return $this
     */
    public function setName($value = null)
    {
        $this->Name = $value;

        return $this;
    }

    /**
     * Gets UrlFeed.
     *
     * @return UrlFeedUpdate|null
     */
    public function getUrlFeed()
    {
        return isset($this->UrlFeed) ? $this->UrlFeed : null;
    }

    /**
     * Sets UrlFeed.
     *
     * @param UrlFeedUpdate|null $value
     * @return $this
     */
    public function setUrlFeed(UrlFeedUpdate $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }

    /**
     * Gets FileFeed.
     *
     * @return FileFeedUpdate|null
     */
    public function getFileFeed()
    {
        return isset($this->FileFeed) ? $this->FileFeed : null;
    }

    /**
     * Sets FileFeed.
     *
     * @param FileFeedUpdate|null $value
     * @return $this
     */
    public function setFileFeed(FileFeedUpdate $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }


}

