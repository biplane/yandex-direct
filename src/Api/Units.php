<?php

namespace Biplane\YandexDirect\Api;

/**
 * Units
 *
 * @author Denis Vasilev
 */
class Units
{
    private $limit;
    private $rest;
    private $spent;

    /**
     * Constructor.
     *
     * @param int $spent A number of spent units by request
     * @param int $rest  A number of rest units
     * @param int $limit The daily limit of units
     */
    public function __construct($spent, $rest, $limit)
    {
        $this->spent = (int)$spent;
        $this->rest = (int)$rest;
        $this->limit = (int)$limit;
    }

    /**
     * Gets the daily limit of units.
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Gets a number of rest units.
     *
     * @return int
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * Gets a number of spent units by the last request.
     *
     * @return int
     */
    public function getSpent()
    {
        return $this->spent;
    }
}
