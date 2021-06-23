<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FeedGetItem
{

//    Can be omit.
//    protected $Id = null;

//    Can be omit.
//    protected $Name = null;

//    Can be omit.
//    protected $BusinessType = null;

//    Can be omit.
//    protected $SourceType = null;

//    Can be omit.
//    protected $FilterSchema = null;

//    Can be omit.
//    protected $UpdatedAt = null;

//    Can be omit.
//    protected $CampaignIds = null;

//    Can be omit.
//    protected $FileFeed = null;

//    Can be omit.
//    protected $NumberOfItems = null;

//    Can be omit.
//    protected $Status = null;

//    Can be omit.
//    protected $UrlFeed = null;

    /**
     * Creates a new instance of FeedGetItem.
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
     * @return int|null
     */
    public function getId()
    {
        return isset($this->Id) ? $this->Id : null;
    }

    /**
     * Sets Id.
     *
     * @param int|null $value
     * @return $this
     */
    public function setId($value = null)
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
     * Gets BusinessType.
     *
     * @return string|null
     * @see BusinessTypeEnum
     */
    public function getBusinessType()
    {
        return isset($this->BusinessType) ? $this->BusinessType : null;
    }

    /**
     * Sets BusinessType.
     *
     * @param string|null $value
     * @return $this
     * @see BusinessTypeEnum
     */
    public function setBusinessType($value = null)
    {
        $this->BusinessType = $value;

        return $this;
    }

    /**
     * Gets SourceType.
     *
     * @return string|null
     * @see SourceTypeEnum
     */
    public function getSourceType()
    {
        return isset($this->SourceType) ? $this->SourceType : null;
    }

    /**
     * Sets SourceType.
     *
     * @param string|null $value
     * @return $this
     * @see SourceTypeEnum
     */
    public function setSourceType($value = null)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Gets FilterSchema.
     *
     * @return string|null
     */
    public function getFilterSchema()
    {
        return isset($this->FilterSchema) ? $this->FilterSchema : null;
    }

    /**
     * Sets FilterSchema.
     *
     * @param string|null $value
     * @return $this
     */
    public function setFilterSchema($value = null)
    {
        $this->FilterSchema = $value;

        return $this;
    }

    /**
     * Gets UpdatedAt.
     *
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return isset($this->UpdatedAt) ? $this->UpdatedAt : null;
    }

    /**
     * Sets UpdatedAt.
     *
     * @param string|null $value
     * @return $this
     */
    public function setUpdatedAt($value = null)
    {
        $this->UpdatedAt = $value;

        return $this;
    }

    /**
     * Gets CampaignIds.
     *
     * @return float[]|null
     */
    public function getCampaignIds()
    {
        return isset($this->CampaignIds) ? $this->CampaignIds : null;
    }

    /**
     * Sets CampaignIds.
     *
     * @param float[]|null $value
     * @return $this
     */
    public function setCampaignIds(array $value = null)
    {
        $this->CampaignIds = $value;

        return $this;
    }

    /**
     * Gets FileFeed.
     *
     * @return FileFeedGet|null
     */
    public function getFileFeed()
    {
        return isset($this->FileFeed) ? $this->FileFeed : null;
    }

    /**
     * Sets FileFeed.
     *
     * @param FileFeedGet|null $value
     * @return $this
     */
    public function setFileFeed(FileFeedGet $value = null)
    {
        $this->FileFeed = $value;

        return $this;
    }

    /**
     * Gets NumberOfItems.
     *
     * @return int|null
     */
    public function getNumberOfItems()
    {
        return isset($this->NumberOfItems) ? $this->NumberOfItems : null;
    }

    /**
     * Sets NumberOfItems.
     *
     * @param int|null $value
     * @return $this
     */
    public function setNumberOfItems($value = null)
    {
        $this->NumberOfItems = $value;

        return $this;
    }

    /**
     * Gets Status.
     *
     * @return string|null
     * @see FeedStatusEnum
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }

    /**
     * Sets Status.
     *
     * @param string|null $value
     * @return $this
     * @see FeedStatusEnum
     */
    public function setStatus($value = null)
    {
        $this->Status = $value;

        return $this;
    }

    /**
     * Gets UrlFeed.
     *
     * @return UrlFeedGet|null
     */
    public function getUrlFeed()
    {
        return isset($this->UrlFeed) ? $this->UrlFeed : null;
    }

    /**
     * Sets UrlFeed.
     *
     * @param UrlFeedGet|null $value
     * @return $this
     */
    public function setUrlFeed(UrlFeedGet $value = null)
    {
        $this->UrlFeed = $value;

        return $this;
    }


}

