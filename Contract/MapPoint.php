<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class MapPoint
{
    /**
     * @var float
     */
    protected $x;
    /**
     * @var float
     */
    protected $y;
    /**
     * @var float
     */
    protected $x1;
    /**
     * @var float
     */
    protected $y1;
    /**
     * @var float
     */
    protected $x2;
    /**
     * @var float
     */
    protected $y2;

    /**
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param float $x
     * @return MapPoint
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param float $y
     * @return MapPoint
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * @return float
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * @param float $x1
     * @return MapPoint
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;

        return $this;
    }

    /**
     * @return float
     */
    public function getY1()
    {
        return $this->y1;
    }

    /**
     * @param float $y1
     * @return MapPoint
     */
    public function setY1($y1)
    {
        $this->y1 = $y1;

        return $this;
    }

    /**
     * @return float
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * @param float $x2
     * @return MapPoint
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;

        return $this;
    }

    /**
     * @return float
     */
    public function getY2()
    {
        return $this->y2;
    }

    /**
     * @param float $y2
     * @return MapPoint
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;

        return $this;
    }
}