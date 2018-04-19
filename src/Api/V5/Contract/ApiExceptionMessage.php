<?php

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
     * @return $this
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
     * @return $this
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
        return isset($this->errorDetail) ? $this->errorDetail : null;
    }

    /**
     * Sets errorDetail.
     *
     * @param string|null $value
     * @return $this
     */
    public function setErrorDetail($value = null)
    {
        $this->errorDetail = $value;

        return $this;
    }


}

