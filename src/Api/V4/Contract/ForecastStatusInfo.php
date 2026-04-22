<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ForecastStatusInfo
{
    /** @var int */
    protected $ForecastID;

    /** @var string */
    protected $StatusForecast;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get ForecastID
     */
    public function getForecastID(): int
    {
        return $this->ForecastID;
    }

    /**
     * Set ForecastID
     *
     * @return $this
     */
    public function setForecastID(int $value)
    {
        $this->ForecastID = $value;

        return $this;
    }

    /**
     * Get StatusForecast
     */
    public function getStatusForecast(): string
    {
        return $this->StatusForecast;
    }

    /**
     * Set StatusForecast
     *
     * @return $this
     */
    public function setStatusForecast(string $value)
    {
        $this->StatusForecast = $value;

        return $this;
    }
}
