<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class CpmBannerCampaignBase
{
//    Can be omitted.
//    protected $CounterIds;

//    Can be omitted.
//    protected $FrequencyCap;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get CounterIds
     *
     * @return non-empty-list<int>|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * Set CounterIds
     *
     * @param non-empty-list<int>|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value)
    {
        $this->CounterIds = $value;

        return $this;
    }

    /**
     * Get FrequencyCap
     */
    public function getFrequencyCap(): ?FrequencyCapSetting
    {
        return $this->FrequencyCap ?? null;
    }

    /**
     * Set FrequencyCap
     *
     * @return $this
     */
    public function setFrequencyCap(?FrequencyCapSetting $value)
    {
        $this->FrequencyCap = $value;

        return $this;
    }
}
