<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Sitelink
{

    protected $Title = null;

    protected $Href = null;

//    Can be omit.
//    protected $Description = null;

    /**
     * Creates a new instance of Sitelink.
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
     * Gets Href.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @param string $value
     * @return $this
     */
    public function setHref($value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Gets Description.
     *
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }

    /**
     * Sets Description.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;

        return $this;
    }


}

