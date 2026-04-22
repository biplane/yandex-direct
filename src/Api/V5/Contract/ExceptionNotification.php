<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ExceptionNotification
{
    /** @var int */
    protected $Code;

    /** @var string */
    protected $Message;

//    Can be omitted.
//    protected $Details;

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
     * Get Code
     */
    public function getCode(): int
    {
        return $this->Code;
    }

    /**
     * Set Code
     *
     * @return $this
     */
    public function setCode(int $value)
    {
        $this->Code = $value;

        return $this;
    }

    /**
     * Get Message
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * Set Message
     *
     * @return $this
     */
    public function setMessage(string $value)
    {
        $this->Message = $value;

        return $this;
    }

    /**
     * Get Details
     */
    public function getDetails(): ?string
    {
        return $this->Details ?? null;
    }

    /**
     * Set Details
     *
     * @return $this
     */
    public function setDetails(?string $value)
    {
        $this->Details = $value;

        return $this;
    }
}
