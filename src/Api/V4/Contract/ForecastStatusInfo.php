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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getForecastID(): int
    {
        return $this->ForecastID;
    }

    /**
     * @return $this
     */
    public function setForecastID(int $value)
    {
        $this->ForecastID = $value;

        return $this;
    }

    public function getStatusForecast(): string
    {
        return $this->StatusForecast;
    }

    /**
     * @return $this
     */
    public function setStatusForecast(string $value)
    {
        $this->StatusForecast = $value;

        return $this;
    }
}
