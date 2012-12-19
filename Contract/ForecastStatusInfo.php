<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
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
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the ForecastID.
     *
     * @return int
     */
    public function getForecastID()
    {
        return $this->ForecastID;
    }

    /**
     * Sets the ForecastID.
     *
     * @param int $ForecastID
     *
     * @return ForecastStatusInfo
     */
    public function setForecastID($ForecastID)
    {
        $this->ForecastID = $ForecastID;

        return $this;
    }

    /**
     * Gets the StatusForecast.
     *
     * @return string
     */
    public function getStatusForecast()
    {
        return $this->StatusForecast;
    }

    /**
     * Sets the StatusForecast.
     *
     * @param string $StatusForecast
     *
     * @return ForecastStatusInfo
     */
    public function setStatusForecast($StatusForecast)
    {
        $this->StatusForecast = $StatusForecast;

        return $this;
    }
}