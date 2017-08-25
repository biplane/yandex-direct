<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdAdd extends TextAdAddBase
{

    protected $Text = null;

    protected $Title = null;

    protected $Title2 = null;

    protected $Href = null;

    protected $Mobile = null;

    protected $DisplayUrlPath = null;

    protected $VideoExtension = null;

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
     * Gets Title2.
     *
     * @return string|null
     */
    public function getTitle2()
    {
        return $this->Title2;
    }

    /**
     * Sets Title2.
     *
     * @param string|null $value
     * @return self
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
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @param string|null $value
     * @return self
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
     * @return self
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
        return $this->DisplayUrlPath;
    }

    /**
     * Sets DisplayUrlPath.
     *
     * @param string|null $value
     * @return self
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
        return $this->VideoExtension;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionAddItem|null $value
     * @return self
     */
    public function setVideoExtension(VideoExtensionAddItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }


}

