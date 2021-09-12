<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class Error
{
    protected $FaultCode = null;

    protected $FaultString = null;

    protected $FaultDetail = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getFaultCode(): int
    {
        return $this->FaultCode;
    }

    /**
     * @return $this
     */
    public function setFaultCode(int $value)
    {
        $this->FaultCode = $value;

        return $this;
    }

    public function getFaultString(): string
    {
        return $this->FaultString;
    }

    /**
     * @return $this
     */
    public function setFaultString(string $value)
    {
        $this->FaultString = $value;

        return $this;
    }

    public function getFaultDetail(): ?string
    {
        return $this->FaultDetail;
    }

    /**
     * @return $this
     */
    public function setFaultDetail(?string $value = null)
    {
        $this->FaultDetail = $value;

        return $this;
    }
}
