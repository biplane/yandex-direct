<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 */
class ForecastStatusInfo
{
    const STATUS_DONE = 'Done';
    const STATUS_PENDING = 'Pending';

    /**
     * @var int
     */
    protected $ForecastID;
    /**
     * @var string
     */
    protected $StatusForecast;

    /**
     * @return int
     */
    public function getForecastID()
    {
        return $this->ForecastID;
    }

    /**
     * @param int $ForecastID
     * @return ForecastStatusInfo
     */
    public function setForecastID($ForecastID)
    {
        $this->ForecastID = $ForecastID;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatusForecast()
    {
        return $this->StatusForecast;
    }

    /**
     * @param string $StatusForecast
     * @return ForecastStatusInfo
     */
    public function setStatusForecast($StatusForecast)
    {
        $this->StatusForecast = $StatusForecast;

        return $this;
    }
}