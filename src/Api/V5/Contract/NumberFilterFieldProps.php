<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class NumberFilterFieldProps
{
    /** @var float */
    protected $Min;

    /** @var float */
    protected $Max;

    /** @var int */
    protected $Precision;

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
     * Get Min
     */
    public function getMin(): float
    {
        return $this->Min;
    }

    /**
     * Set Min
     *
     * @return $this
     */
    public function setMin(float $value)
    {
        $this->Min = $value;

        return $this;
    }

    /**
     * Get Max
     */
    public function getMax(): float
    {
        return $this->Max;
    }

    /**
     * Set Max
     *
     * @return $this
     */
    public function setMax(float $value)
    {
        $this->Max = $value;

        return $this;
    }

    /**
     * Get Precision
     */
    public function getPrecision(): int
    {
        return $this->Precision;
    }

    /**
     * Set Precision
     *
     * @return $this
     */
    public function setPrecision(int $value)
    {
        $this->Precision = $value;

        return $this;
    }
}
