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
     * Creates a new instance of Error.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets FaultCode.
     */
    public function getFaultCode(): int
    {
        return $this->FaultCode;
    }

    /**
     * Sets FaultCode.
     *
     * @return $this
     */
    public function setFaultCode(int $value)
    {
        $this->FaultCode = $value;

        return $this;
    }

    /**
     * Gets FaultString.
     */
    public function getFaultString(): string
    {
        return $this->FaultString;
    }

    /**
     * Sets FaultString.
     *
     * @return $this
     */
    public function setFaultString(string $value)
    {
        $this->FaultString = $value;

        return $this;
    }

    /**
     * Gets FaultDetail.
     */
    public function getFaultDetail(): ?string
    {
        return $this->FaultDetail;
    }

    /**
     * Sets FaultDetail.
     *
     * @return $this
     */
    public function setFaultDetail(?string $value = null)
    {
        $this->FaultDetail = $value;

        return $this;
    }
}
