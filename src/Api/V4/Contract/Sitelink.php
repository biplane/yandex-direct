<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Title.
     */
    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * Sets Title.
     *
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Gets Href.
     */
    public function getHref(): string
    {
        return $this->Href;
    }

    /**
     * Sets Href.
     *
     * @return $this
     */
    public function setHref(string $value)
    {
        $this->Href = $value;

        return $this;
    }
}
