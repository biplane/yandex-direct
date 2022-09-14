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
    protected $WarningCode = null;

    protected $WarningString = null;

    protected $Description = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getWarningCode(): int
    {
        return $this->WarningCode;
    }

    /**
     * @return $this
     */
    public function setWarningCode(int $value)
    {
        $this->WarningCode = $value;

        return $this;
    }

    public function getWarningString(): string
    {
        return $this->WarningString;
    }

    /**
     * @return $this
     */
    public function setWarningString(string $value)
    {
        $this->WarningString = $value;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    /**
     * @return $this
     */
    public function setDescription(?string $value = null)
    {
        $this->Description = $value;

        return $this;
    }
}
