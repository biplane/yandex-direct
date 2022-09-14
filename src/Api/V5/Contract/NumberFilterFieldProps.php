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
    protected $Min = null;

    protected $Max = null;

    protected $Precision = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getMin(): float
    {
        return $this->Min;
    }

    /**
     * @return $this
     */
    public function setMin(float $value)
    {
        $this->Min = $value;

        return $this;
    }

    public function getMax(): float
    {
        return $this->Max;
    }

    /**
     * @return $this
     */
    public function setMax(float $value)
    {
        $this->Max = $value;

        return $this;
    }

    public function getPrecision(): int
    {
        return $this->Precision;
    }

    /**
     * @return $this
     */
    public function setPrecision(int $value)
    {
        $this->Precision = $value;

        return $this;
    }
}
