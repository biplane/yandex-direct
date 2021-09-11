<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class VersionDesc
{
    protected $VersionNumber = null;

    protected $LinkWSDL = null;

    protected $BorderDate = null;

    /**
     * Creates a new instance of VersionDesc.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets VersionNumber.
     */
    public function getVersionNumber(): int
    {
        return $this->VersionNumber;
    }

    /**
     * Sets VersionNumber.
     *
     * @return $this
     */
    public function setVersionNumber(int $value)
    {
        $this->VersionNumber = $value;

        return $this;
    }

    /**
     * Gets LinkWSDL.
     */
    public function getLinkWSDL(): string
    {
        return $this->LinkWSDL;
    }

    /**
     * Sets LinkWSDL.
     *
     * @return $this
     */
    public function setLinkWSDL(string $value)
    {
        $this->LinkWSDL = $value;

        return $this;
    }

    /**
     * Gets BorderDate.
     */
    public function getBorderDate(): ?string
    {
        return $this->BorderDate;
    }

    /**
     * Sets BorderDate.
     *
     * @return $this
     */
    public function setBorderDate(?string $value = null)
    {
        $this->BorderDate = $value;

        return $this;
    }
}
