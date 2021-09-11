<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class MapPoint
{
    protected $X = null;

    protected $Y = null;

    protected $X1 = null;

    protected $Y1 = null;

    protected $X2 = null;

    protected $Y2 = null;

    /**
     * Creates a new instance of MapPoint.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets X.
     */
    public function getX(): float
    {
        return $this->X;
    }

    /**
     * Sets X.
     *
     * @return $this
     */
    public function setX(float $value)
    {
        $this->X = $value;

        return $this;
    }

    /**
     * Gets Y.
     */
    public function getY(): float
    {
        return $this->Y;
    }

    /**
     * Sets Y.
     *
     * @return $this
     */
    public function setY(float $value)
    {
        $this->Y = $value;

        return $this;
    }

    /**
     * Gets X1.
     */
    public function getX1(): float
    {
        return $this->X1;
    }

    /**
     * Sets X1.
     *
     * @return $this
     */
    public function setX1(float $value)
    {
        $this->X1 = $value;

        return $this;
    }

    /**
     * Gets Y1.
     */
    public function getY1(): float
    {
        return $this->Y1;
    }

    /**
     * Sets Y1.
     *
     * @return $this
     */
    public function setY1(float $value)
    {
        $this->Y1 = $value;

        return $this;
    }

    /**
     * Gets X2.
     */
    public function getX2(): float
    {
        return $this->X2;
    }

    /**
     * Sets X2.
     *
     * @return $this
     */
    public function setX2(float $value)
    {
        $this->X2 = $value;

        return $this;
    }

    /**
     * Gets Y2.
     */
    public function getY2(): float
    {
        return $this->Y2;
    }

    /**
     * Sets Y2.
     *
     * @return $this
     */
    public function setY2(float $value)
    {
        $this->Y2 = $value;

        return $this;
    }
}
