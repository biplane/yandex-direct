<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ExceptionNotification
{
    protected $Code = null;

    protected $Message = null;

//    Can be omit.
//    protected $Details = null;

    /**
     * Creates a new instance of ExceptionNotification.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Code.
     */
    public function getCode(): int
    {
        return $this->Code;
    }

    /**
     * Sets Code.
     *
     * @return $this
     */
    public function setCode(int $value)
    {
        $this->Code = $value;

        return $this;
    }

    /**
     * Gets Message.
     */
    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * Sets Message.
     *
     * @return $this
     */
    public function setMessage(string $value)
    {
        $this->Message = $value;

        return $this;
    }

    /**
     * Gets Details.
     */
    public function getDetails(): ?string
    {
        return $this->Details ?? null;
    }

    /**
     * Sets Details.
     *
     * @return $this
     */
    public function setDetails(?string $value = null)
    {
        $this->Details = $value;

        return $this;
    }
}
