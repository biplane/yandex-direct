<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class DynamicSourceGet
{

//    Can be omit.
//    protected $Source = null;

//    Can be omit.
//    protected $FeedId = null;

//    Can be omit.
//    protected $SourceType = null;

//    Can be omit.
//    protected $SourceProcessingStatus = null;

    /**
     * Creates a new instance of DynamicSourceGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Source.
     *
     * @return string|null
     */
    public function getSource()
    {
        return isset($this->Source) ? $this->Source : null;
    }

    /**
     * Sets Source.
     *
     * @param string|null $value
     * @return $this
     */
    public function setSource($value = null)
    {
        $this->Source = $value;

        return $this;
    }

    /**
     * Gets FeedId.
     *
     * @return int|null
     */
    public function getFeedId()
    {
        return isset($this->FeedId) ? $this->FeedId : null;
    }

    /**
     * Sets FeedId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setFeedId($value = null)
    {
        $this->FeedId = $value;

        return $this;
    }

    /**
     * Gets SourceType.
     *
     * @return string|null
     * @see SourceTypeGetEnum
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
     * @see SourceTypeGetEnum
     */
    public function setSourceType($value = null)
    {
        $this->SourceType = $value;

        return $this;
    }

    /**
     * Gets SourceProcessingStatus.
     *
     * @return string|null
     * @see SourceProcessingStatusEnum
     */
    public function getSourceProcessingStatus()
    {
        return isset($this->SourceProcessingStatus) ? $this->SourceProcessingStatus : null;
    }

    /**
     * Sets SourceProcessingStatus.
     *
     * @param string|null $value
     * @return $this
     * @see SourceProcessingStatusEnum
     */
    public function setSourceProcessingStatus($value = null)
    {
        $this->SourceProcessingStatus = $value;

        return $this;
    }


}

