<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class FrequencyCapSetting
{

    protected $Impressions = null;

    protected $PeriodDays = null;

    /**
     * Creates a new instance of FrequencyCapSetting.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets Impressions.
     *
     * @return int
     */
    public function getImpressions()
    {
        return $this->Impressions;
    }

    /**
     * Sets Impressions.
     *
     * @param int $value
     * @return $this
     */
    public function setImpressions($value)
    {
        $this->Impressions = $value;

        return $this;
    }

    /**
     * Gets PeriodDays.
     *
     * @return int|null
     */
    public function getPeriodDays()
    {
        return $this->PeriodDays;
    }

    /**
     * Sets PeriodDays.
     *
     * @param int|null $value
     * @return $this
     */
    public function setPeriodDays($value = null)
    {
        $this->PeriodDays = $value;

        return $this;
    }


}

