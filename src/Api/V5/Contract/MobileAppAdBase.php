<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdBase
{

//    Can be omit.
//    protected $Title = null;

//    Can be omit.
//    protected $Text = null;

//    Can be omit.
//    protected $TrackingUrl = null;

//    Can be omit.
//    protected $Action = null;

//    Can be omit.
//    protected $AdImageHash = null;

    /**
     * Creates a new instance of MobileAppAdBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return isset($this->Title) ? $this->Title : null;
    }

    /**
     * Sets Title.
     *
     * @param string|null $value
     * @return self
     */
    public function setTitle($value = null)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Text.
     *
     * @return string|null
     */
    public function getText()
    {
        return isset($this->Text) ? $this->Text : null;
    }

    /**
     * Sets Text.
     *
     * @param string|null $value
     * @return self
     */
    public function setText($value = null)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets TrackingUrl.
     *
     * @return string|null
     */
    public function getTrackingUrl()
    {
        return isset($this->TrackingUrl) ? $this->TrackingUrl : null;
    }

    /**
     * Sets TrackingUrl.
     *
     * @param string|null $value
     * @return self
     */
    public function setTrackingUrl($value = null)
    {
        $this->TrackingUrl = $value;

        return $this;
    }

    /**
     * Gets Action.
     *
     * @return string|null
     * @see MobileAppAdActionEnum
     */
    public function getAction()
    {
        return isset($this->Action) ? $this->Action : null;
    }

    /**
     * Sets Action.
     *
     * @param string|null $value
     * @return self
     * @see MobileAppAdActionEnum
     */
    public function setAction($value = null)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets AdImageHash.
     *
     * @return string|null
     */
    public function getAdImageHash()
    {
        return isset($this->AdImageHash) ? $this->AdImageHash : null;
    }

    /**
     * Sets AdImageHash.
     *
     * @param string|null $value
     * @return self
     */
    public function setAdImageHash($value = null)
    {
        $this->AdImageHash = $value;

        return $this;
    }


}

