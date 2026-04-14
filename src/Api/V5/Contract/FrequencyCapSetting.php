<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class FrequencyCapSetting
{
    /** @var int */
    protected $Impressions;

    /** @var int|null */
    protected $PeriodDays = null;

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
     * Get Impressions
     */
    public function getImpressions(): int
    {
        return $this->Impressions;
    }

    /**
     * Set Impressions
     *
     * @return $this
     */
    public function setImpressions(int $value)
    {
        $this->Impressions = $value;

        return $this;
    }

    /**
     * Get PeriodDays
     */
    public function getPeriodDays(): ?int
    {
        return $this->PeriodDays;
    }

    /**
     * Set PeriodDays
     *
     * @return $this
     */
    public function setPeriodDays(?int $value)
    {
        $this->PeriodDays = $value;

        return $this;
    }
}
