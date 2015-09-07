<?php

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
     *
     * @return MapPoint
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets X.
     *
     * @return float
     */
    public function getX()
    {
        return $this->X;
    }

    /**
     * Sets X.
     *
     * @param float $value
     * @return $this
     */
    public function setX($value)
    {
        $this->X = $value;

        return $this;
    }

    /**
     * Gets Y.
     *
     * @return float
     */
    public function getY()
    {
        return $this->Y;
    }

    /**
     * Sets Y.
     *
     * @param float $value
     * @return $this
     */
    public function setY($value)
    {
        $this->Y = $value;

        return $this;
    }

    /**
     * Gets X1.
     *
     * @return float
     */
    public function getX1()
    {
        return $this->X1;
    }

    /**
     * Sets X1.
     *
     * @param float $value
     * @return $this
     */
    public function setX1($value)
    {
        $this->X1 = $value;

        return $this;
    }

    /**
     * Gets Y1.
     *
     * @return float
     */
    public function getY1()
    {
        return $this->Y1;
    }

    /**
     * Sets Y1.
     *
     * @param float $value
     * @return $this
     */
    public function setY1($value)
    {
        $this->Y1 = $value;

        return $this;
    }

    /**
     * Gets X2.
     *
     * @return float
     */
    public function getX2()
    {
        return $this->X2;
    }

    /**
     * Sets X2.
     *
     * @param float $value
     * @return $this
     */
    public function setX2($value)
    {
        $this->X2 = $value;

        return $this;
    }

    /**
     * Gets Y2.
     *
     * @return float
     */
    public function getY2()
    {
        return $this->Y2;
    }

    /**
     * Sets Y2.
     *
     * @param float $value
     * @return $this
     */
    public function setY2($value)
    {
        $this->Y2 = $value;

        return $this;
    }


}

