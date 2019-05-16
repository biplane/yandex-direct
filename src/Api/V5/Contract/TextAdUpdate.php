<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdUpdate extends TextAdUpdateBase
{

//    Can be omit.
//    protected $Text = null;

//    Can be omit.
//    protected $Title = null;

//    Can be omit.
//    protected $Title2 = null;

//    Can be omit.
//    protected $Href = null;

//    Can be omit.
//    protected $AgeLabel = null;

//    Can be omit.
//    protected $DisplayUrlPath = null;

//    Can be omit.
//    protected $VideoExtension = null;

//    Can be omit.
//    protected $PriceExtension = null;

//    Can be omit.
//    protected $TurboPageId = null;

    /**
     * Creates a new instance of TextAdUpdate.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
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
     * @return $this
     */
    public function setText($value = null)
    {
        $this->Text = $value;

        return $this;
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
     * @return $this
     */
    public function setTitle($value = null)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Title2.
     *
     * @return string|null
     */
    public function getTitle2()
    {
        return isset($this->Title2) ? $this->Title2 : null;
    }

    /**
     * Sets Title2.
     *
     * @param string|null $value
     * @return $this
     */
    public function setTitle2($value = null)
    {
        $this->Title2 = $value;

        return $this;
    }

    /**
     * Gets Href.
     *
     * @return string|null
     */
    public function getHref()
    {
        return isset($this->Href) ? $this->Href : null;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return $this
     */
    public function setHref($value = null)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets AgeLabel.
     *
     * @return string|null
     * @see AgeLabelEnum
     */
    public function getAgeLabel()
    {
        return isset($this->AgeLabel) ? $this->AgeLabel : null;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return $this
     * @see AgeLabelEnum
     */
    public function setAgeLabel($value = null)
    {
        $this->AgeLabel = $value;

        return $this;
    }

    /**
     * Gets DisplayUrlPath.
     *
     * @return string|null
     */
    public function getDisplayUrlPath()
    {
        return isset($this->DisplayUrlPath) ? $this->DisplayUrlPath : null;
    }

    /**
     * Sets DisplayUrlPath.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDisplayUrlPath($value = null)
    {
        $this->DisplayUrlPath = $value;

        return $this;
    }

    /**
     * Gets VideoExtension.
     *
     * @return VideoExtensionUpdateItem|null
     */
    public function getVideoExtension()
    {
        return isset($this->VideoExtension) ? $this->VideoExtension : null;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionUpdateItem|null $value
     * @return $this
     */
    public function setVideoExtension(VideoExtensionUpdateItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    /**
     * Gets PriceExtension.
     *
     * @return PriceExtensionUpdateItem|null
     */
    public function getPriceExtension()
    {
        return isset($this->PriceExtension) ? $this->PriceExtension : null;
    }

    /**
     * Sets PriceExtension.
     *
     * @param PriceExtensionUpdateItem|null $value
     * @return $this
     */
    public function setPriceExtension(PriceExtensionUpdateItem $value = null)
    {
        $this->PriceExtension = $value;

        return $this;
    }

    /**
     * Gets TurboPageId.
     *
     * @return int|null
     */
    public function getTurboPageId()
    {
        return isset($this->TurboPageId) ? $this->TurboPageId : null;
    }

    /**
     * Sets TurboPageId.
     *
     * @param int|null $value
     * @return $this
     */
    public function setTurboPageId($value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }


}

