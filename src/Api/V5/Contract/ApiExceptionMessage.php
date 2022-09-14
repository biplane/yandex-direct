<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ApiExceptionMessage
{
    protected $requestId = null;

    protected $errorCode = null;

//    Can be omitted.
//    protected $errorDetail = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * @return $this
     */
    public function setRequestId(?string $value = null)
    {
        $this->requestId = $value;

        return $this;
    }

    public function getErrorCode(): ?int
    {
        return $this->errorCode;
    }

    /**
     * @return $this
     */
    public function setErrorCode(?int $value = null)
    {
        $this->errorCode = $value;

        return $this;
    }

    public function getErrorDetail(): ?string
    {
        return $this->errorDetail ?? null;
    }

    /**
     * @return $this
     */
    public function setErrorDetail(?string $value = null)
    {
        $this->errorDetail = $value;

        return $this;
    }
}
