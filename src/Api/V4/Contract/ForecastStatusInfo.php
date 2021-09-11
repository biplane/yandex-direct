<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ForecastStatusInfo
{
    protected $ForecastID = null;

    protected $StatusForecast = null;

    /**
     * Creates a new instance of ForecastStatusInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets ForecastID.
     */
    public function getForecastID(): int
    {
        return $this->ForecastID;
    }

    /**
     * Sets ForecastID.
     *
     * @return $this
     */
    public function setForecastID(int $value)
    {
        $this->ForecastID = $value;

        return $this;
    }

    /**
     * Gets StatusForecast.
     */
    public function getStatusForecast(): string
    {
        return $this->StatusForecast;
    }

    /**
     * Sets StatusForecast.
     *
     * @return $this
     */
    public function setStatusForecast(string $value)
    {
        $this->StatusForecast = $value;

        return $this;
    }
}
