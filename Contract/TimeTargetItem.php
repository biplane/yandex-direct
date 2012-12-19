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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Hours.
     *
     * @return int[]
     */
    public function getHours()
    {
        return $this->Hours;
    }

    /**
     * Sets the Hours.
     *
     * @param int[] $Hours
     *
     * @return TimeTargetItem
     */
    public function setHours(array $Hours)
    {
        $this->Hours = $Hours;

        return $this;
    }

    /**
     * Gets the Days.
     *
     * @return int[]
     */
    public function getDays()
    {
        return $this->Days;
    }

    /**
     * Sets the Days.
     *
     * @param int[] $Days
     *
     * @return TimeTargetItem
     */
    public function setDays(array $Days)
    {
        $this->Days = $Days;

        return $this;
    }

    /**
     * Gets the BidCoefs.
     *
     * @return int[]
     */
    public function getBidCoefs()
    {
        return $this->BidCoefs;
    }

    /**
     * Sets the BidCoefs.
     *
     * @param int[] $BidCoefs
     *
     * @return TimeTargetItem
     */
    public function setBidCoefs(array $BidCoefs)
    {
        $this->BidCoefs = $BidCoefs;

        return $this;
    }
}