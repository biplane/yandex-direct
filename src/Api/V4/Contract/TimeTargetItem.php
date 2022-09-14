<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TimeTargetItem
{
    protected $Hours = [];

    protected $Days = [];

    protected $BidCoefs = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]
     */
    public function getHours(): array
    {
        return $this->Hours;
    }

    /**
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
     * @return int[]
     */
    public function getDays(): array
    {
        return $this->Days;
    }

    /**
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
     * @return int[]|null
     */
    public function getBidCoefs(): ?array
    {
        return $this->BidCoefs;
    }

    /**
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
