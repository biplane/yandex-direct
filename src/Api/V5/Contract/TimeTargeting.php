<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;
use Override;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class TimeTargeting extends TimeTargetingBase
{
//    Can be omitted.
//    protected $HolidaysSchedule;

    /**
     * Create a new instance.
     *
     * @return static
     */
    #[Override]
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get HolidaysSchedule
     */
    public function getHolidaysSchedule(): ?TimeTargetingOnPublicHolidays
    {
        return $this->HolidaysSchedule ?? null;
    }

    /**
     * Set HolidaysSchedule
     *
     * @return $this
     */
    public function setHolidaysSchedule(?TimeTargetingOnPublicHolidays $value)
    {
        $this->HolidaysSchedule = $value;

        return $this;
    }
}
