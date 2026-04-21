<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class VersionDesc
{
    /** @var int */
    protected $VersionNumber;

    /** @var string */
    protected $LinkWSDL;

    /** @var string|null */
    protected $BorderDate = null;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get VersionNumber
     */
    public function getVersionNumber(): int
    {
        return $this->VersionNumber;
    }

    /**
     * Set VersionNumber
     *
     * @return $this
     */
    public function setVersionNumber(int $value)
    {
        $this->VersionNumber = $value;

        return $this;
    }

    /**
     * Get LinkWSDL
     */
    public function getLinkWSDL(): string
    {
        return $this->LinkWSDL;
    }

    /**
     * Set LinkWSDL
     *
     * @return $this
     */
    public function setLinkWSDL(string $value)
    {
        $this->LinkWSDL = $value;

        return $this;
    }

    /**
     * Get BorderDate
     */
    public function getBorderDate(): ?string
    {
        return $this->BorderDate;
    }

    /**
     * Set BorderDate
     *
     * @return $this
     */
    public function setBorderDate(?string $value)
    {
        $this->BorderDate = $value;

        return $this;
    }
}
