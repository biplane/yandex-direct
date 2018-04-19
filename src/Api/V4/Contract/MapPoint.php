<?php

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
     * Creates a new instance of MapPoint.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets x.
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Sets x.
     *
     * @param float $value
     * @return $this
     */
    public function setX($value)
    {
        $this->x = $value;

        return $this;
    }

    /**
     * Gets y.
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets y.
     *
     * @param float $value
     * @return $this
     */
    public function setY($value)
    {
        $this->y = $value;

        return $this;
    }

    /**
     * Gets x1.
     *
     * @return float
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * Sets x1.
     *
     * @param float $value
     * @return $this
     */
    public function setX1($value)
    {
        $this->x1 = $value;

        return $this;
    }

    /**
     * Gets y1.
     *
     * @return float
     */
    public function getY1()
    {
        return $this->y1;
    }

    /**
     * Sets y1.
     *
     * @param float $value
     * @return $this
     */
    public function setY1($value)
    {
        $this->y1 = $value;

        return $this;
    }

    /**
     * Gets x2.
     *
     * @return float
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * Sets x2.
     *
     * @param float $value
     * @return $this
     */
    public function setX2($value)
    {
        $this->x2 = $value;

        return $this;
    }

    /**
     * Gets y2.
     *
     * @return float
     */
    public function getY2()
    {
        return $this->y2;
    }

    /**
     * Sets y2.
     *
     * @param float $value
     * @return $this
     */
    public function setY2($value)
    {
        $this->y2 = $value;

        return $this;
    }


}

