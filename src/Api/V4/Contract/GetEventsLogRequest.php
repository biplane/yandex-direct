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
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getTimestampFrom(): string
    {
        return $this->TimestampFrom;
    }

    /**
     * @return $this
     */
    public function setTimestampFrom(string $value)
    {
        $this->TimestampFrom = $value;

        return $this;
    }

    public function getTimestampTo(): ?string
    {
        return $this->TimestampTo;
    }

    /**
     * @return $this
     */
    public function setTimestampTo(?string $value = null)
    {
        $this->TimestampTo = $value;

        return $this;
    }

    public function getLastEventOnly(): ?string
    {
        return $this->LastEventOnly;
    }

    /**
     * @return $this
     */
    public function setLastEventOnly(?string $value = null)
    {
        $this->LastEventOnly = $value;

        return $this;
    }

    public function getWithTextDescription(): ?string
    {
        return $this->WithTextDescription;
    }

    /**
     * @return $this
     */
    public function setWithTextDescription(?string $value = null)
    {
        $this->WithTextDescription = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getLogins(): ?array
    {
        return $this->Logins;
    }

    /**
     * @param string[]|null $value
     *
     * @return $this
     */
    public function setLogins(?array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    public function getFilter(): ?GetEventsLogFilter
    {
        return $this->Filter;
    }

    /**
     * @return $this
     */
    public function setFilter(?GetEventsLogFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->Currency;
    }

    /**
     * @return $this
     */
    public function setCurrency(?string $value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->Limit;
    }

    /**
     * @return $this
     */
    public function setLimit(?int $value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    public function getOffset(): ?int
    {
        return $this->Offset;
    }

    /**
     * @return $this
     */
    public function setOffset(?int $value = null)
    {
        $this->Offset = $value;

        return $this;
    }
}
