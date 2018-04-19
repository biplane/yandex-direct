<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MobileAppAdAdd
{

//    Can be omit.
//    protected $AdImageHash = null;

    protected $Text = null;

    protected $Title = null;

//    Can be omit.
//    protected $TrackingUrl = null;

    protected $Action = null;

//    Can be omit.
//    protected $Features = null;

//    Can be omit.
//    protected $AgeLabel = null;

    /**
     * Creates a new instance of MobileAppAdAdd.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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

    /**
     * Gets Text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->Text;
    }

    /**
     * Sets Text.
     *
     * @param string $value
     * @return self
     */
    public function setText($value)
    {
        $this->Text = $value;

        return $this;
    }

    /**
     * Gets Title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @param string $value
     * @return self
     */
    public function setTitle($value)
    {
        $this->Title = $value;

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
     * @return string
     * @see MobileAppAdActionEnum
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * Sets Action.
     *
     * @param string $value
     * @return self
     * @see MobileAppAdActionEnum
     */
    public function setAction($value)
    {
        $this->Action = $value;

        return $this;
    }

    /**
     * Gets Features.
     *
     * @return MobileAppAdFeatureItem[]|null
     */
    public function getFeatures()
    {
        return isset($this->Features) ? $this->Features : null;
    }

    /**
     * Sets Features.
     *
     * @param MobileAppAdFeatureItem[]|null $value
     * @return self
     */
    public function setFeatures(array $value = null)
    {
        $this->Features = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return string|null
     * @see MobAppAgeLabelEnum
     */
    public function getAgeLabel()
    {
        return isset($this->AgeLabel) ? $this->AgeLabel : null;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return self
     * @see MobAppAgeLabelEnum
     */
    public function setAgeLabel($value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }


}

