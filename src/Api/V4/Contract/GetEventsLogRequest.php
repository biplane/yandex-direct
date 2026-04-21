<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class GetEventsLogRequest
{
    /** @var string */
    protected $TimestampFrom;

    /** @var string|null */
    protected $TimestampTo = null;

    /** @var string|null */
    protected $LastEventOnly = null;

    /** @var string|null */
    protected $WithTextDescription = null;

//    Can be omitted.
//    protected $Logins;

    /** @var GetEventsLogFilter|null */
    protected $Filter = null;

    /** @var string|null */
    protected $Currency = null;

    /** @var int|null */
    protected $Limit = null;

    /** @var int|null */
    protected $Offset = null;

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
     * Get TimestampFrom
     */
    public function getTimestampFrom(): string
    {
        return $this->TimestampFrom;
    }

    /**
     * Set TimestampFrom
     *
     * @return $this
     */
    public function setTimestampFrom(string $value)
    {
        $this->TimestampFrom = $value;

        return $this;
    }

    /**
     * Get TimestampTo
     */
    public function getTimestampTo(): ?string
    {
        return $this->TimestampTo;
    }

    /**
     * Set TimestampTo
     *
     * @return $this
     */
    public function setTimestampTo(?string $value)
    {
        $this->TimestampTo = $value;

        return $this;
    }

    /**
     * Get LastEventOnly
     */
    public function getLastEventOnly(): ?string
    {
        return $this->LastEventOnly;
    }

    /**
     * Set LastEventOnly
     *
     * @return $this
     */
    public function setLastEventOnly(?string $value)
    {
        $this->LastEventOnly = $value;

        return $this;
    }

    /**
     * Get WithTextDescription
     */
    public function getWithTextDescription(): ?string
    {
        return $this->WithTextDescription;
    }

    /**
     * Set WithTextDescription
     *
     * @return $this
     */
    public function setWithTextDescription(?string $value)
    {
        $this->WithTextDescription = $value;

        return $this;
    }

    /**
     * Get Logins
     *
     * @return list<string>|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins ?? null;
    }

    /**
     * Set Logins
     *
     * @param list<string>|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Get Filter
     */
    public function getFilter(): ?GetEventsLogFilter
    {
        return $this->Filter;
    }

    /**
     * Set Filter
     *
     * @return $this
     */
    public function setFilter(?GetEventsLogFilter $value)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Get Currency
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Set Currency
     *
     * @return $this
     */
    public function setCurrency(?string $value)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Get Limit
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Set Limit
     *
     * @return $this
     */
    public function setLimit(?int $value)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Get Offset
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Set Offset
     *
     * @return $this
     */
    public function setOffset(?int $value)
    {
        $this->Offset = $value;

        return $this;
    }
}
