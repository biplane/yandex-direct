<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Warning
{
    protected $WarningCode = null;

    protected $WarningString = null;

    protected $Description = null;

    /**
     * Creates a new instance of Warning.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets WarningCode.
     */
    public function getWarningCode(): int
    {
        return $this->WarningCode;
    }

    /**
     * Sets WarningCode.
     *
     * @return $this
     */
    public function setWarningCode(int $value)
    {
        $this->WarningCode = $value;

        return $this;
    }

    /**
     * Gets WarningString.
     */
    public function getWarningString(): string
    {
        return $this->WarningString;
    }

    /**
     * Sets WarningString.
     *
     * @return $this
     */
    public function setWarningString(string $value)
    {
        $this->WarningString = $value;

        return $this;
    }

    /**
     * Gets Description.
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    /**
     * Sets Description.
     *
     * @return $this
     */
    public function setDescription(?string $value = null)
    {
        $this->Description = $value;

        return $this;
    }
}
