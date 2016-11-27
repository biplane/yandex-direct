<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class Sitelink
{

    protected $Title = null;

    protected $Href = null;

    protected $Description = null;

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
     * @return self
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
     * @return self
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
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @param string|null $value
     * @return self
     */
    public function setDescription($value = null)
    {
        $this->Description = $value;

        return $this;
    }


}

