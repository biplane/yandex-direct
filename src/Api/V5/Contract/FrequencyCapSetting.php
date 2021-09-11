<?php

declare(strict_types=1);

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
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Impressions.
     */
    public function getImpressions(): int
    {
        return $this->Impressions;
    }

    /**
     * Sets Impressions.
     *
     * @return $this
     */
    public function setImpressions(int $value)
    {
        $this->Impressions = $value;

        return $this;
    }

    /**
     * Gets PeriodDays.
     */
    public function getPeriodDays(): ?int
    {
        return $this->PeriodDays;
    }

    /**
     * Sets PeriodDays.
     *
     * @return $this
     */
    public function setPeriodDays(?int $value = null)
    {
        $this->PeriodDays = $value;

        return $this;
    }
}
