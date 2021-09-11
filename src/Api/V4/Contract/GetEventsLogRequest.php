<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class GetEventsLogRequest
{
    protected $TimestampFrom = null;

    protected $TimestampTo = null;

    protected $LastEventOnly = null;

    protected $WithTextDescription = null;

    protected $Logins = null;

    protected $Filter = null;

    protected $Currency = null;

    protected $Limit = null;

    protected $Offset = null;

    /**
     * Creates a new instance of GetEventsLogRequest.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets TimestampFrom.
     */
    public function getTimestampFrom(): string
    {
        return $this->TimestampFrom;
    }

    /**
     * Sets TimestampFrom.
     *
     * @return $this
     */
    public function setTimestampFrom(string $value)
    {
        $this->TimestampFrom = $value;

        return $this;
    }

    /**
     * Gets TimestampTo.
     */
    public function getTimestampTo(): ?string
    {
        return $this->TimestampTo;
    }

    /**
     * Sets TimestampTo.
     *
     * @return $this
     */
    public function setTimestampTo(?string $value = null)
    {
        $this->TimestampTo = $value;

        return $this;
    }

    /**
     * Gets LastEventOnly.
     */
    public function getLastEventOnly(): ?string
    {
        return $this->LastEventOnly;
    }

    /**
     * Sets LastEventOnly.
     *
     * @return $this
     */
    public function setLastEventOnly(?string $value = null)
    {
        $this->LastEventOnly = $value;

        return $this;
    }

    /**
     * Gets WithTextDescription.
     */
    public function getWithTextDescription(): ?string
    {
        return $this->WithTextDescription;
    }

    /**
     * Sets WithTextDescription.
     *
     * @return $this
     */
    public function setWithTextDescription(?string $value = null)
    {
        $this->WithTextDescription = $value;

        return $this;
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets Filter.
     */
    public function getFilter(): ?GetEventsLogFilter
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @return $this
     */
    public function setFilter(?GetEventsLogFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Gets Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Limit.
     */
    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     */
    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
