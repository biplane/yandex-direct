<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetEventsLogRequest
{
    /**
     * @var string
     */
    protected $TimestampFrom;
    /**
     * @var string
     */
    protected $TimestampTo;
    /**
     * @var string
     */
    protected $LastEventOnly;
    /**
     * @var string
     */
    protected $WithTextDescription;
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var GetEventsLogFilter
     */
    protected $Filter;
    /**
     * @var string
     */
    protected $Currency;
    /**
     * @var int
     */
    protected $Limit;
    /**
     * @var int
     */
    protected $Offset;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the TimestampFrom.
     *
     * @return string
     */
    public function getTimestampFrom()
    {
        return $this->TimestampFrom;
    }

    /**
     * Sets the TimestampFrom.
     *
     * @param string $TimestampFrom
     *
     * @return GetEventsLogRequest
     */
    public function setTimestampFrom($TimestampFrom)
    {
        $this->TimestampFrom = $TimestampFrom;

        return $this;
    }

    /**
     * Gets the TimestampTo.
     *
     * @return string
     */
    public function getTimestampTo()
    {
        return $this->TimestampTo;
    }

    /**
     * Sets the TimestampTo.
     *
     * @param string $TimestampTo
     *
     * @return GetEventsLogRequest
     */
    public function setTimestampTo($TimestampTo)
    {
        $this->TimestampTo = $TimestampTo;

        return $this;
    }

    /**
     * Gets the LastEventOnly.
     *
     * @return string
     */
    public function getLastEventOnly()
    {
        return $this->LastEventOnly;
    }

    /**
     * Sets the LastEventOnly.
     *
     * @param string $LastEventOnly
     *
     * @return GetEventsLogRequest
     */
    public function setLastEventOnly($LastEventOnly)
    {
        $this->LastEventOnly = $LastEventOnly;

        return $this;
    }

    /**
     * Gets the WithTextDescription.
     *
     * @return string
     */
    public function getWithTextDescription()
    {
        return $this->WithTextDescription;
    }

    /**
     * Sets the WithTextDescription.
     *
     * @param string $WithTextDescription
     *
     * @return GetEventsLogRequest
     */
    public function setWithTextDescription($WithTextDescription)
    {
        $this->WithTextDescription = $WithTextDescription;

        return $this;
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return GetEventsLogRequest
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the Filter.
     *
     * @return GetEventsLogFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets the Filter.
     *
     * @param GetEventsLogFilter $Filter
     *
     * @return GetEventsLogRequest
     */
    public function setFilter(GetEventsLogFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }

    /**
     * Gets the Currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets the Currency.
     *
     * @param string $Currency
     *
     * @return GetEventsLogRequest
     */
    public function setCurrency($Currency)
    {
        $this->Currency = $Currency;

        return $this;
    }

    /**
     * Gets the Limit.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets the Limit.
     *
     * @param int $Limit
     *
     * @return GetEventsLogRequest
     */
    public function setLimit($Limit)
    {
        $this->Limit = $Limit;

        return $this;
    }

    /**
     * Gets the Offset.
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets the Offset.
     *
     * @param int $Offset
     *
     * @return GetEventsLogRequest
     */
    public function setOffset($Offset)
    {
        $this->Offset = $Offset;

        return $this;
    }
}