<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets CounterIds.
     *
     * @return int[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Sets CounterIds.
     *
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Gets FrequencyCap.
     */
    public function getFrequencyCap(): ?FrequencyCapSetting
    {
        return $this->FrequencyCap ?? null;
    }

    /**
     * Sets FrequencyCap.
     *
     * @return $this
     */
    public function setFrequencyCap(?FrequencyCapSetting $value = null)
    {
        $this->FrequencyCap = $value;

        return $this;
    }
}
