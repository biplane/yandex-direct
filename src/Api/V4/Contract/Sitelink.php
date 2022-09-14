<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Sitelink
{
    protected $Title = null;

    protected $Href = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTitle(): string
    {
        return $this->Title;
    }

    /**
     * @return $this
     */
    public function setTitle(string $value)
    {
        $this->Title = $value;

        return $this;
    }

    public function getHref(): string
    {
        return $this->Href;
    }

    /**
     * @return $this
     */
    public function setHref(string $value)
    {
        $this->Href = $value;

        return $this;
    }
}
