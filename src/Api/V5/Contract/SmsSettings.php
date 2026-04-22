<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class SmsSettings
{
//    Can be omitted.
//    protected $Events;

//    Can be omitted.
//    protected $TimeFrom;

//    Can be omitted.
//    protected $TimeTo;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create(): static
    {
        return new static();
    }

    /**
     * Get Events
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmsEventsEnum
     *
     * @return list<'MONITORING'|'MODERATION'|'MONEY_IN'|'MONEY_OUT'|'FINISHED'>
     */
    public function getEvents(): array
    {
        return $this->Events ?? [];
    }

    /**
     * Set Events
     *
     * @see \Biplane\YandexDirect\Api\V5\Contract\SmsEventsEnum
     *
     * @param list<'MONITORING'|'MODERATION'|'MONEY_IN'|'MONEY_OUT'|'FINISHED'> $value
     *
     * @return $this
     */
    public function setEvents(array $value)
    {
        $this->Events = $value;

        return $this;
    }

    /**
     * Get TimeFrom
     */
    public function getTimeFrom(): ?string
    {
        return $this->TimeFrom ?? null;
    }

    /**
     * Set TimeFrom
     *
     * @return $this
     */
    public function setTimeFrom(?string $value)
    {
        $this->TimeFrom = $value;

        return $this;
    }

    /**
     * Get TimeTo
     */
    public function getTimeTo(): ?string
    {
        return $this->TimeTo ?? null;
    }

    /**
     * Set TimeTo
     *
     * @return $this
     */
    public function setTimeTo(?string $value)
    {
        $this->TimeTo = $value;

        return $this;
    }
}
