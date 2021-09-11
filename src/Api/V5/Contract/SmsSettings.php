<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmsSettings
{
//    Can be omit.
//    protected $Events = null;

//    Can be omit.
//    protected $TimeFrom = null;

//    Can be omit.
//    protected $TimeTo = null;

    /**
     * Creates a new instance of SmsSettings.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Events.
     *
     * @see SmsEventsEnum
     *
     * @return string[]|null
     */
    public function getEvents(): ?array
    {
        return $this->Events ?? null;
    }

    /**
     * Sets Events.
     *
     * @see SmsEventsEnum
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setEvents(?array $value = null)
    {
        $this->Events = $value;

        return $this;
    }

    /**
     * Gets TimeFrom.
     */
    public function getTimeFrom(): ?string
    {
        return $this->TimeFrom ?? null;
    }

    /**
     * Sets TimeFrom.
     *
     * @return $this
     */
    public function setTimeFrom(?string $value = null)
    {
        $this->TimeFrom = $value;

        return $this;
    }

    /**
     * Gets TimeTo.
     */
    public function getTimeTo(): ?string
    {
        return $this->TimeTo ?? null;
    }

    /**
     * Sets TimeTo.
     *
     * @return $this
     */
    public function setTimeTo(?string $value = null)
    {
        $this->TimeTo = $value;

        return $this;
    }
}
