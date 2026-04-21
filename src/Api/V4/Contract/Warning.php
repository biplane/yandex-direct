<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Warning
{
    /** @var int */
    protected $WarningCode;

    /** @var string */
    protected $WarningString;

    /** @var string|null */
    protected $Description = null;

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
     * Get WarningCode
     */
    public function getWarningCode(): int
    {
        return $this->WarningCode;
    }

    /**
     * Set WarningCode
     *
     * @return $this
     */
    public function setWarningCode(int $value)
    {
        $this->WarningCode = $value;

        return $this;
    }

    /**
     * Get WarningString
     */
    public function getWarningString(): string
    {
        return $this->WarningString;
    }

    /**
     * Set WarningString
     *
     * @return $this
     */
    public function setWarningString(string $value)
    {
        $this->WarningString = $value;

        return $this;
    }

    /**
     * Get Description
     */
    public function getDescription(): ?string
    {
        return $this->Description;
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
}
