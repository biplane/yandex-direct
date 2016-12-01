<?php

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
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TimestampFrom.
     *
     * @return string
     */
    public function getTimestampFrom()
    {
        return $this->TimestampFrom;
    }

    /**
     * Sets TimestampFrom.
     *
     * @param string $value
     * @return self
     */
    public function setTimestampFrom($value)
    {
        $this->TimestampFrom = $value;

        return $this;
    }

    /**
     * Gets TimestampTo.
     *
     * @return string|null
     */
    public function getTimestampTo()
    {
        return $this->TimestampTo;
    }

    /**
     * Sets TimestampTo.
     *
     * @param string|null $value
     * @return self
     */
    public function setTimestampTo($value = null)
    {
        $this->TimestampTo = $value;

        return $this;
    }

    /**
     * Gets LastEventOnly.
     *
     * @return string|null
     */
    public function getLastEventOnly()
    {
        return $this->LastEventOnly;
    }

    /**
     * Sets LastEventOnly.
     *
     * @param string|null $value
     * @return self
     */
    public function setLastEventOnly($value = null)
    {
        $this->LastEventOnly = $value;

        return $this;
    }

    /**
     * Gets WithTextDescription.
     *
     * @return string|null
     */
    public function getWithTextDescription()
    {
        return $this->WithTextDescription;
    }

    /**
     * Sets WithTextDescription.
     *
     * @param string|null $value
     * @return self
     */
    public function setWithTextDescription($value = null)
    {
        $this->WithTextDescription = $value;

        return $this;
    }

    /**
     * Gets Logins.
     *
     * @return string[]|null
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets Logins.
     *
     * @param string[]|null $value
     * @return self
     */
    public function setLogins(array $value = null)
    {
        $this->Logins = $value;

        return $this;
    }

    /**
     * Gets Filter.
     *
     * @return GetEventsLogFilter|null
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets Filter.
     *
     * @param GetEventsLogFilter|null $value
     * @return self
     */
    public function setFilter(GetEventsLogFilter $value = null)
    {
        $this->Filter = $value;

        return $this;
    }

    /**
     * Gets Currency.
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * Sets Currency.
     *
     * @param string|null $value
     * @return self
     */
    public function setCurrency($value = null)
    {
        $this->Currency = $value;

        return $this;
    }

    /**
     * Gets Limit.
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->Limit;
    }

    /**
     * Sets Limit.
     *
     * @param int|null $value
     * @return self
     */
    public function setLimit($value = null)
    {
        $this->Limit = $value;

        return $this;
    }

    /**
     * Gets Offset.
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->Offset;
    }

    /**
     * Sets Offset.
     *
     * @param int|null $value
     * @return self
     */
    public function setOffset($value = null)
    {
        $this->Offset = $value;

        return $this;
    }


}

