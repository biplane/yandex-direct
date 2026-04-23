<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

final class Units
{
    public function __construct(private int $spent, private int $rest, private int $limit, private string $usedLogin)
    {
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

    /**
     * Gets the username of the advertiser's or the agency's representative.
     */
    public function getUsedLogin(): string
    {
        return $this->usedLogin;
    }
}
