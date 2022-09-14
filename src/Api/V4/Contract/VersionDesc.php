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
    protected $VersionNumber = null;

    protected $LinkWSDL = null;

    protected $BorderDate = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getVersionNumber(): int
    {
        return $this->VersionNumber;
    }

    /**
     * @return $this
     */
    public function setVersionNumber(int $value)
    {
        $this->VersionNumber = $value;

        return $this;
    }

    public function getLinkWSDL(): string
    {
        return $this->LinkWSDL;
    }

    /**
     * @return $this
     */
    public function setLinkWSDL(string $value)
    {
        $this->LinkWSDL = $value;

        return $this;
    }

    public function getBorderDate(): ?string
    {
        return $this->BorderDate;
    }

    /**
     * @return $this
     */
    public function setBorderDate(?string $value = null)
    {
        $this->BorderDate = $value;

        return $this;
    }
}
