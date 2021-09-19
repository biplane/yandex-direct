<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

class Units
{
    /** @var int */
    private $limit;

    /** @var int */
    private $rest;

    /** @var int */
    private $spent;

    /**
     * @param int $spent A number of spent units by request
     * @param int $rest  A number of rest units
     * @param int $limit The daily limit of units
     */
    public function __construct(int $spent, int $rest, int $limit)
    {
        $this->spent = $spent;
        $this->rest = $rest;
        $this->limit = $limit;
    }

    /**
     * Gets the daily limit of units.
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * Gets a number of rest units.
     */
    public function getRest(): int
    {
        return $this->rest;
    }

    /**
     * Gets a number of spent units by the last request.
     */
    public function getSpent(): int
    {
        return $this->spent;
    }
}
