<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets FaultCode.
     *
     * @return int
     */
    public function getFaultCode()
    {
        return $this->FaultCode;
    }

    /**
     * Sets FaultCode.
     *
     * @param int $value
     * @return $this
     */
    public function setFaultCode($value)
    {
        $this->FaultCode = $value;

        return $this;
    }

    /**
     * Gets FaultString.
     *
     * @return string
     */
    public function getFaultString()
    {
        return $this->FaultString;
    }

    /**
     * Sets FaultString.
     *
     * @param string $value
     * @return $this
     */
    public function setFaultString($value)
    {
        $this->FaultString = $value;

        return $this;
    }

    /**
     * Gets FaultDetail.
     *
     * @return string|null
     */
    public function getFaultDetail()
    {
        return $this->FaultDetail;
    }

    /**
     * Sets FaultDetail.
     *
     * @param string|null $value
     * @return $this
     */
    public function setFaultDetail($value = null)
    {
        $this->FaultDetail = $value;

        return $this;
    }


}

