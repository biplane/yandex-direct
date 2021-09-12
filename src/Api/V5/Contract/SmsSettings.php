<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class SmsSettings
{
//    Can be omitted.
//    protected $Events = null;

//    Can be omitted.
//    protected $TimeFrom = null;

//    Can be omitted.
//    protected $TimeTo = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @see SmsEventsEnum
     *
     * @return string[]|null
     */
    public function getEvents(): ?array
    {
        return $this->Events ?? null;
    }

    /**
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

    public function getTimeFrom(): ?string
    {
        return $this->TimeFrom ?? null;
    }

    /**
     * @return $this
     */
    public function setTimeFrom(?string $value = null)
    {
        $this->TimeFrom = $value;

        return $this;
    }

    public function getTimeTo(): ?string
    {
        return $this->TimeTo ?? null;
    }

    /**
     * @return $this
     */
    public function setTimeTo(?string $value = null)
    {
        $this->TimeTo = $value;

        return $this;
    }
}
