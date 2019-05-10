<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdAdd extends TextAdAddBase
{

    protected $Text = null;

    protected $Title = null;

//    Can be omit.
//    protected $Title2 = null;

//    Can be omit.
//    protected $Href = null;

    protected $Mobile = null;

//    Can be omit.
//    protected $DisplayUrlPath = null;

//    Can be omit.
//    protected $VideoExtension = null;

//    Can be omit.
//    protected $PriceExtension = null;

    /**
     * Creates a new instance of TextAdAdd.
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
     * @return $this
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
     * @return $this
     */
    public function setTitle($value)
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
     * Gets Mobile.
     *
     * @return string
     * @see YesNoEnum
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Sets Mobile.
     *
     * @param string $value
     * @return $this
     * @see YesNoEnum
     */
    public function setMobile($value)
    {
        $this->Mobile = $value;

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
     * @return VideoExtensionAddItem|null
     */
    public function getVideoExtension()
    {
        return isset($this->VideoExtension) ? $this->VideoExtension : null;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionAddItem|null $value
     * @return $this
     */
    public function setVideoExtension(VideoExtensionAddItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }

    /**
     * Gets PriceExtension.
     *
     * @return PriceExtensionAddItem|null
     */
    public function getPriceExtension()
    {
        return isset($this->PriceExtension) ? $this->PriceExtension : null;
    }

    /**
     * Sets PriceExtension.
     *
     * @param PriceExtensionAddItem|null $value
     * @return $this
     */
    public function setPriceExtension(PriceExtensionAddItem $value = null)
    {
        $this->PriceExtension = $value;

        return $this;
    }


}

