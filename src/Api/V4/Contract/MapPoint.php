<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class MapPoint
{
    protected $x = null;

    protected $y = null;

    protected $x1 = null;

    protected $y1 = null;

    protected $x2 = null;

    protected $y2 = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getX(): float
    {
        return $this->x;
    }

    /**
     * @return $this
     */
    public function setX(float $value)
    {
        $this->x = $value;

        return $this;
    }

    public function getY(): float
    {
        return $this->y;
    }

    /**
     * @return $this
     */
    public function setY(float $value)
    {
        $this->y = $value;

        return $this;
    }

    public function getX1(): float
    {
        return $this->x1;
    }

    /**
     * @return $this
     */
    public function setX1(float $value)
    {
        $this->x1 = $value;

        return $this;
    }

    public function getY1(): float
    {
        return $this->y1;
    }

    /**
     * @return $this
     */
    public function setY1(float $value)
    {
        $this->y1 = $value;

        return $this;
    }

    public function getX2(): float
    {
        return $this->x2;
    }

    /**
     * @return $this
     */
    public function setX2(float $value)
    {
        $this->x2 = $value;

        return $this;
    }

    public function getY2(): float
    {
        return $this->y2;
    }

    /**
     * @return $this
     */
    public function setY2(float $value)
    {
        $this->y2 = $value;

        return $this;
    }
}
