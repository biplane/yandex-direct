<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class Error
{
    /** @var int */
    protected $FaultCode;

    /** @var string */
    protected $FaultString;

    /** @var string|null */
    protected $FaultDetail = null;

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
     * Get FaultCode
     */
    public function getFaultCode(): int
    {
        return $this->FaultCode;
    }

    /**
     * Set FaultCode
     *
     * @return $this
     */
    public function setFaultCode(int $value)
    {
        $this->FaultCode = $value;

        return $this;
    }

    /**
     * Get FaultString
     */
    public function getFaultString(): string
    {
        return $this->FaultString;
    }

    /**
     * Set FaultString
     *
     * @return $this
     */
    public function setFaultString(string $value)
    {
        $this->FaultString = $value;

        return $this;
    }

    /**
     * Get FaultDetail
     */
    public function getFaultDetail(): ?string
    {
        return $this->FaultDetail;
    }

    /**
     * Set FaultDetail
     *
     * @return $this
     */
    public function setFaultDetail(?string $value)
    {
        $this->FaultDetail = $value;

        return $this;
    }
}
