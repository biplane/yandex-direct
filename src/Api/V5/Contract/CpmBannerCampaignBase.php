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
//    protected $CounterIds = null;

//    Can be omitted.
//    protected $FrequencyCap = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @return int[]|null
     */
    public function getCounterIds(): ?array
    {
        return $this->CounterIds ?? null;
    }

    /**
     * @param int[]|null $value
     *
     * @return $this
     */
    public function setCounterIds(?array $value = null)
    {
        $this->CounterIds = $value;

        return $this;
    }

    public function getFrequencyCap(): ?FrequencyCapSetting
    {
        return $this->FrequencyCap ?? null;
    }

    /**
     * @return $this
     */
    public function setFrequencyCap(?FrequencyCapSetting $value = null)
    {
        $this->FrequencyCap = $value;

        return $this;
    }
}
