<?php

namespace Biplane\YandexDirect\Api\V5\Contract;

/**
 * Auto-generated code.
 */
class LeadsSelectionCriteria
{

    protected $TurboPageIds = [];

//    Can be omit.
//    protected $DateTimeFrom = null;

//    Can be omit.
//    protected $DateTimeTo = null;

    /**
     * Creates a new instance of LeadsSelectionCriteria.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets TurboPageIds.
     *
     * @return int[]
     */
    public function getTurboPageIds()
    {
        return $this->TurboPageIds;
    }

    /**
     * Sets TurboPageIds.
     *
     * @param int[] $value
     * @return $this
     */
    public function setTurboPageIds(array $value)
    {
        $this->TurboPageIds = $value;

        return $this;
    }

    /**
     * Gets DateTimeFrom.
     *
     * @return string|null
     */
    public function getDateTimeFrom()
    {
        return isset($this->DateTimeFrom) ? $this->DateTimeFrom : null;
    }

    /**
     * Sets DateTimeFrom.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDateTimeFrom($value = null)
    {
        $this->DateTimeFrom = $value;

        return $this;
    }

    /**
     * Gets DateTimeTo.
     *
     * @return string|null
     */
    public function getDateTimeTo()
    {
        return isset($this->DateTimeTo) ? $this->DateTimeTo : null;
    }

    /**
     * Sets DateTimeTo.
     *
     * @param string|null $value
     * @return $this
     */
    public function setDateTimeTo($value = null)
    {
        $this->DateTimeTo = $value;

        return $this;
    }


}

