<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Min.
     */
    public function getMin(): float
    {
        return $this->Min;
    }

    /**
     * Sets Min.
     *
     * @return $this
     */
    public function setMin(float $value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Gets Max.
     */
    public function getMax(): float
    {
        return $this->Max;
    }

    /**
     * Sets Max.
     *
     * @return $this
     */
    public function setMax(float $value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Gets Precision.
     */
    public function getPrecision(): int
    {
        return $this->Precision;
    }

    /**
     * Sets Precision.
     *
     * @return $this
     */
    public function setPrecision(int $value)
    {
        $this->Precision = $value;

        return $this;
    }
}
