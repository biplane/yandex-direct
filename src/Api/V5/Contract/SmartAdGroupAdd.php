<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmartAdGroupAdd
{

    protected $FeedId = null;

//    Can be omit.
//    protected $AdTitleSource = null;

//    Can be omit.
//    protected $AdBodySource = null;

    /**
     * Creates a new instance of SmartAdGroupAdd.
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
     * @return int
     */
    public function getFeedId()
    {
        return $this->FeedId;
    }

    /**
     * Sets FeedId.
     *
     * @param int $value
     * @return $this
     */
    public function setFeedId($value)
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

