<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SitelinkGetItem
{
//    Can be omitted.
//    protected $Title;

//    Can be omitted.
//    protected $Href;

//    Can be omitted.
//    protected $Description;

//    Can be omitted.
//    protected $TurboPageId;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Title
     */
    public function getTitle(): ?string
    {
        return $this->Title ?? null;
    }

    /**
     * Set Title
     *
     * @return $this
     */
    public function setTitle(?string $value)
    {
        $this->Title = $value;

        return $this;
    }

    /**
     * Get Href
     */
    public function getHref(): ?string
    {
        return $this->Href ?? null;
    }

    /**
     * Set Href
     *
     * @return $this
     */
    public function setHref(?string $value)
    {
        $this->Href = $value;

        return $this;
    }

    /**
     * Get Description
     */
    public function getDescription(): ?string
    {
        return $this->Description ?? null;
    }

    /**
     * Set Description
     *
     * @return $this
     */
    public function setDescription(?string $value)
    {
        $this->Description = $value;

        return $this;
    }

    /**
     * Get TurboPageId
     */
    public function getTurboPageId(): ?int
    {
        return $this->TurboPageId ?? null;
    }

    /**
     * Set TurboPageId
     *
     * @return $this
     */
    public function setTurboPageId(?int $value)
    {
        $this->TurboPageId = $value;

        return $this;
    }
}
