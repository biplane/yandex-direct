<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ApiExceptionMessage
{
    protected $requestId = null;

    protected $errorCode = null;

//    Can be omit.
//    protected $errorDetail = null;

    /**
     * Creates a new instance of ApiExceptionMessage.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets requestId.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets requestId.
     *
     * @return $this
     */
    public function setRequestId(?string $value = null)
    {
        $this->requestId = $value;

        return $this;
    }

    /**
     * Gets errorCode.
     */
    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * Sets errorCode.
     *
     * @return $this
     */
    public function setErrorCode(?int $value = null)
    {
        $this->errorCode = $value;

        return $this;
    }

    /**
     * Gets errorDetail.
     */
    public function getErrorDetail(): ?string
    {
        return $this->errorDetail ?? null;
    }

    /**
     * Sets errorDetail.
     *
     * @return $this
     */
    public function setErrorDetail(?string $value = null)
    {
        $this->errorDetail = $value;

        return $this;
    }
}
