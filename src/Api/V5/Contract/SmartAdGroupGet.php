<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdGroupGet
{

//    Can be omit.
//    protected $FeedId = null;

//    Can be omit.
//    protected $AdTitleSource = null;

//    Can be omit.
//    protected $AdBodySource = null;

    /**
     * Creates a new instance of SmartAdGroupGet.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * Gets AdTitleSource.
     *
     * @return string|null
     */
    public function getAdTitleSource()
    {
        return isset($this->AdTitleSource) ? $this->AdTitleSource : null;
    }

    /**
     * Sets AdTitleSource.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAdTitleSource($value = null)
    {
        $this->AdTitleSource = $value;

        return $this;
    }

    /**
     * Gets AdBodySource.
     *
     * @return string|null
     */
    public function getAdBodySource()
    {
        return isset($this->AdBodySource) ? $this->AdBodySource : null;
    }

    /**
     * Sets AdBodySource.
     *
     * @param string|null $value
     * @return $this
     */
    public function setAdBodySource($value = null)
    {
        $this->AdBodySource = $value;

        return $this;
    }


}

