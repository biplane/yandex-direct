<?php

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Sitelink
{
    /**
     * @var string
     */
    protected $Title;
    /**
     * @var string
     */
    protected $Href;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets the Title.
     *
     * @param string $Title
     *
     * @return Sitelink
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * Gets the Href.
     *
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * Sets the Href.
     *
     * @param string $Href
     *
     * @return Sitelink
     */
    public function setHref($Href)
    {
        $this->Href = $Href;

        return $this;
    }
}