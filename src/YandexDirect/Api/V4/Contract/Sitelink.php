<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Sitelink
{

    protected $Title = null;

    protected $Href = null;

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


}

