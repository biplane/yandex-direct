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
    protected $Code = null;

    protected $Message = null;

//    Can be omitted.
//    protected $Details = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getCode(): int
    {
        return $this->Code;
    }

    /**
     * @return $this
     */
    public function setCode(int $value)
    {
        $this->Code = $value;

        return $this;
    }

    public function getMessage(): string
    {
        return $this->Message;
    }

    /**
     * @return $this
     */
    public function setMessage(string $value)
    {
        $this->Message = $value;

        return $this;
    }

    public function getDetails(): ?string
    {
        return $this->Details ?? null;
    }

    /**
     * @return $this
     */
    public function setDetails(?string $value = null)
    {
        $this->Details = $value;

        return $this;
    }
}
