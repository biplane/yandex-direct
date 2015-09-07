<?php

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
     *
     * @return ForecastStatusInfo
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets ForecastID.
     *
     * @return int
     */
    public function getForecastID()
    {
        return $this->ForecastID;
    }

    /**
     * Sets ForecastID.
     *
     * @param int $value
     * @return $this
     */
    public function setForecastID($value)
    {
        $this->ForecastID = $value;

        return $this;
    }

    /**
     * Gets StatusForecast.
     *
     * @return string
     */
    public function getStatusForecast()
    {
        return $this->StatusForecast;
    }

    /**
     * Sets StatusForecast.
     *
     * @param string $value
     * @return $this
     */
    public function setStatusForecast($value)
    {
        $this->StatusForecast = $value;

        return $this;
    }


}

