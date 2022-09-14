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
    protected $Impressions = null;

    protected $PeriodDays = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getImpressions(): int
    {
        return $this->Impressions;
    }

    /**
     * @return $this
     */
    public function setImpressions(int $value)
    {
        $this->Impressions = $value;

        return $this;
    }

    public function getPeriodDays(): ?int
    {
        return $this->PeriodDays;
    }

    /**
     * @return $this
     */
    public function setPeriodDays(?int $value = null)
    {
        $this->PeriodDays = $value;

        return $this;
    }
}
