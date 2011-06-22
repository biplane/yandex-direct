<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return Sitelink
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;

        return $this;
    }

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->Href;
    }

    /**
     * @param string $Href
     * @return Sitelink
     */
    public function setHref($Href)
    {
        $this->Href = $Href;

        return $this;
    }
}