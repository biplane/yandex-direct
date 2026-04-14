<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class MapPoint
{
    /** @var float */
    protected $X;

    /** @var float */
    protected $Y;

    /** @var float */
    protected $X1;

    /** @var float */
    protected $Y1;

    /** @var float */
    protected $X2;

    /** @var float */
    protected $Y2;

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
     * Get X
     */
    public function getX(): float
    {
        return $this->X;
    }

    /**
     * Set X
     *
     * @return $this
     */
    public function setX(float $value)
    {
        $this->X = $value;

        return $this;
    }

    /**
     * Get Y
     */
    public function getY(): float
    {
        return $this->Y;
    }

    /**
     * Set Y
     *
     * @return $this
     */
    public function setY(float $value)
    {
        $this->Y = $value;

        return $this;
    }

    /**
     * Get X1
     */
    public function getX1(): float
    {
        return $this->X1;
    }

    /**
     * Set X1
     *
     * @return $this
     */
    public function setX1(float $value)
    {
        $this->X1 = $value;

        return $this;
    }

    /**
     * Get Y1
     */
    public function getY1(): float
    {
        return $this->Y1;
    }

    /**
     * Set Y1
     *
     * @return $this
     */
    public function setY1(float $value)
    {
        $this->Y1 = $value;

        return $this;
    }

    /**
     * Get X2
     */
    public function getX2(): float
    {
        return $this->X2;
    }

    /**
     * Set X2
     *
     * @return $this
     */
    public function setX2(float $value)
    {
        $this->X2 = $value;

        return $this;
    }

    /**
     * Get Y2
     */
    public function getY2(): float
    {
        return $this->Y2;
    }

    /**
     * Set Y2
     *
     * @return $this
     */
    public function setY2(float $value)
    {
        $this->Y2 = $value;

        return $this;
    }
}
