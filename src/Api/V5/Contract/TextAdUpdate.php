<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdUpdate extends TextAdUpdateBase
{

    protected $Text = null;

    protected $Title = null;

    protected $Title2 = null;

    protected $Href = null;

    protected $AgeLabel = null;

    protected $DisplayUrlPath = null;

    protected $VideoExtension = null;

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
        return $this->Text;
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
     * Gets Title.
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
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
     * Gets AgeLabel.
     *
     * @return string|null
     * @see AgeLabelEnum
     */
    public function getAgeLabel()
    {
        return $this->AgeLabel;
    }

    /**
     * Sets AgeLabel.
     *
     * @param string|null $value
     * @return self
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
     * @return VideoExtensionUpdateItem|null
     */
    public function getVideoExtension()
    {
        return $this->VideoExtension;
    }

    /**
     * Sets VideoExtension.
     *
     * @param VideoExtensionUpdateItem|null $value
     * @return self
     */
    public function setVideoExtension(VideoExtensionUpdateItem $value = null)
    {
        $this->VideoExtension = $value;

        return $this;
    }


}

