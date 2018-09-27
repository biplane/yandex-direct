<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class CpmBannerCampaignBase
{

//    Can be omit.
//    protected $CounterIds = null;

//    Can be omit.
//    protected $FrequencyCap = null;

    /**
     * Creates a new instance of CpmBannerCampaignBase.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds()
    {
        return isset($this->CounterIds) ? $this->CounterIds : null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     * @return $this
     */
    public function setCounterIds(array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets FrequencyCap.
     *
     * @return FrequencyCapSetting|null
     */
    public function getFrequencyCap()
    {
        return isset($this->FrequencyCap) ? $this->FrequencyCap : null;
    }

    /**
     * Sets FrequencyCap.
     *
     * @param FrequencyCapSetting|null $value
     * @return $this
     */
    public function setFrequencyCap(FrequencyCapSetting $value = null)
    {
        $this->FrequencyCap = $value;

        return $this;
    }


}

