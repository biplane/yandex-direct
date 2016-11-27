<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class ApiExceptionMessage
{

    protected $requestId = null;

    protected $errorCode = null;

    protected $errorDetail = null;

    /**
     * Creates a new instance of ApiExceptionMessage.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets requestId.
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId.
     *
     * @param string|null $value
     * @return self
     */
    public function setRequestId($value = null)
    {
        $this->requestId = $value;

        return $this;
    }

    /**
     * Gets errorCode.
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Sets errorCode.
     *
     * @param int|null $value
     * @return self
     */
    public function setErrorCode($value = null)
    {
        $this->errorCode = $value;

        return $this;
    }

    /**
     * Gets errorDetail.
     *
     * @return string|null
     */
    public function getErrorDetail()
    {
        return $this->errorDetail;
    }

    /**
     * Sets errorDetail.
     *
     * @param string|null $value
     * @return self
     */
    public function setErrorDetail($value = null)
    {
        $this->errorDetail = $value;

        return $this;
    }


}

