<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class TimeTargetItem
{
    protected $Hours = [];

    protected $Days = [];

    protected $BidCoefs = null;

    /**
     * Creates a new instance of TimeTargetItem.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Hours.
     *
     * @return int[]
     */
    public function getHours(): array
    {
        return $this->Hours;
    }

    /**
     * Sets Hours.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setHours(array $value)
    {
        $this->Hours = $value;

        return $this;
    }

    /**
     * Gets Days.
     *
     * @return int[]
     */
    public function getDays(): array
    {
        return $this->Days;
    }

    /**
     * Sets Days.
     *
     * @param int[] $value
     *
     * @return $this
     */
    public function setDays(array $value)
    {
        $this->Days = $value;

        return $this;
    }

    /**
     * Gets BidCoefs.
     *
     * @return int[]|null
     */
    public function getBidCoefs(): ?array
    {
        return $this->BidCoefs;
    }

    /**
     * Sets BidCoefs.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setBidCoefs(?array $value = null)
    {
        $this->BidCoefs = $value;

        return $this;
    }
}
