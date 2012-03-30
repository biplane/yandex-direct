<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
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
     * @var string[]
     */
    protected $Logins;
    /**
     * @var GetEventsLogFilter
     */
    protected $Filter;

    /**
     * @return string
     */
    public function getTimestampFrom()
    {
        return $this->TimestampFrom;
    }

    /**
     * @param string $TimestampFrom
     * @return GetEventsLogRequest
     */
    public function setTimestampFrom($TimestampFrom)
    {
        $this->TimestampFrom = $TimestampFrom;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimestampTo()
    {
        return $this->TimestampTo;
    }

    /**
     * @param string $TimestampTo
     * @return GetEventsLogRequest
     */
    public function setTimestampTo($TimestampTo)
    {
        $this->TimestampTo = $TimestampTo;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastEventOnly()
    {
        return $this->LastEventOnly;
    }

    /**
     * @param string $LastEventOnly
     * @return GetEventsLogRequest
     */
    public function setLastEventOnly($LastEventOnly)
    {
        $this->LastEventOnly = $LastEventOnly;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * @param string[] $Logins
     * @return GetEventsLogRequest
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * @return GetEventsLogFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * @param GetEventsLogFilter $Filter
     * @return GetEventsLogRequest
     */
    public function setFilter(GetEventsLogFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }
}