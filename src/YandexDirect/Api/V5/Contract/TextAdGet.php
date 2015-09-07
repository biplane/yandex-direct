<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class TextAdGet extends TextAdGetBase
{

    protected $Text = null;

    protected $Title = null;

    protected $Href = null;

    protected $Mobile = null;

    protected $DisplayDomain = null;

    /**
     * Creates a new instance of TextAdGet.
     *
     * @return TextAdGet
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
        return $this->Title;
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
     * @return YesNoEnum|null
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * Sets Mobile.
     *
     * @param YesNoEnum|null $value
     * @return $this
     */
    public function setMobile(YesNoEnum $value = null)
    {
        $this->Mobile = $value;

        return $this;
    }

    /**
     * Gets DisplayDomain.
     *
     * @return string|null
     */
    public function getDisplayDomain()
    {
        return $this->DisplayDomain;
    }

    /**
     * Sets DisplayDomain.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDisplayDomain($value = null)
    {
        $this->DisplayDomain = $value;

        return $this;
    }


}

