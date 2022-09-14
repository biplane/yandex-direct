<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SitelinkAddItem
{
    protected $Title = null;

//    Can be omitted.
//    protected $Href = null;

//    Can be omitted.
//    protected $Description = null;

//    Can be omitted.
//    protected $TurboPageId = null;

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

    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * @return $this
     */
    public function setHref(?string $value = null)
    {
        $this->Href = $value;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * @return $this
     */
    public function setDescription(?string $value = null)
    {
        $this->Description = $value;

        return $this;
    }

    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * @return $this
     */
    public function setTurboPageId(?int $value = null)
    {
        $this->TurboPageId = $value;

        return $this;
    }
}
