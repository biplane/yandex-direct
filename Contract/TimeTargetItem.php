<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class TimeTargetItem
{
    /**
     * @var int[]
     */
    protected $Hours;
    /**
     * @var int[]
     */
    protected $Days;
    /**
     * @var int[]
     */
    protected $BidCoefs;

    /**
     * @return int[]
     */
    public function getHours()
    {
        return $this->Hours;
    }

    /**
     * @param int[] $Hours
     * @return TimeTargetItem
     */
    public function setHours(array $Hours)
    {
        $this->Hours = $Hours;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * @param int[] $Days
     * @return TimeTargetItem
     */
    public function setDays(array $Days)
    {
        $this->Days = $Days;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getBidCoefs()
    {
        return $this->BidCoefs;
    }

    /**
     * @param int[] $BidCoefs
     * @return TimeTargetItem
     */
    public function setBidCoefs(array $BidCoefs)
    {
        $this->BidCoefs = $BidCoefs;

        return $this;
    }
}