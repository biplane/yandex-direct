<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class Error
{
    /**
     * @var int
     */
    protected $FaultCode;
    /**
     * @var string
     */
    protected $FaultString;
    /**
     * @var string
     */
    protected $FaultDetail;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the FaultCode.
     *
     * @return int
     */
    public function getFaultCode()
    {
        return $this->FaultCode;
    }

    /**
     * Sets the FaultCode.
     *
     * @param int $FaultCode
     *
     * @return Error
     */
    public function setFaultCode($FaultCode)
    {
        $this->FaultCode = $FaultCode;

        return $this;
    }

    /**
     * Gets the FaultString.
     *
     * @return string
     */
    public function getFaultString()
    {
        return $this->FaultString;
    }

    /**
     * Sets the FaultString.
     *
     * @param string $FaultString
     *
     * @return Error
     */
    public function setFaultString($FaultString)
    {
        $this->FaultString = $FaultString;

        return $this;
    }

    /**
     * Gets the FaultDetail.
     *
     * @return string
     */
    public function getFaultDetail()
    {
        return $this->FaultDetail;
    }

    /**
     * Sets the FaultDetail.
     *
     * @param string $FaultDetail
     *
     * @return Error
     */
    public function setFaultDetail($FaultDetail)
    {
        $this->FaultDetail = $FaultDetail;

        return $this;
    }
}