<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class NumberFilterFieldProps
{

    protected $Min = null;

    protected $Max = null;

    protected $Precision = null;

    /**
     * Creates a new instance of NumberFilterFieldProps.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Min.
     *
     * @return float
     */
    public function getMin()
    {
        return $this->Min;
    }

    /**
     * Sets Min.
     *
     * @param float $value
     * @return $this
     */
    public function setMin($value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Gets Max.
     *
     * @return float
     */
    public function getMax()
    {
        return $this->Max;
    }

    /**
     * Sets Max.
     *
     * @param float $value
     * @return $this
     */
    public function setMax($value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Gets Precision.
     *
     * @return int
     */
    public function getPrecision()
    {
        return $this->Precision;
    }

    /**
     * Sets Precision.
     *
     * @param int $value
     * @return $this
     */
    public function setPrecision($value)
    {
        $this->Precision = $value;

        return $this;
    }


}

