<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class CoverageInfo
{
    /**
     * @var float
     */
    protected $Probability;
    /**
     * @var float
     */
    protected $Price;

    /**
     * @return float
     */
    public function getProbability()
    {
        return $this->Probability;
    }

    /**
     * @param float $Probability
     * @return CoverageInfo
     */
    public function setProbability($Probability)
    {
        $this->Probability = $Probability;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return CoverageInfo
     */
    public function setPrice($Price)
    {
        $this->Price = $Price;

        return $this;
    }
}