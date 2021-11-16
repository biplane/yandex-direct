<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api;

final class Units
{
    /** @var int */
    private $limit;

    /** @var int */
    private $rest;

    /** @var int */
    private $spent;

    /** @var string */
    private $usedLogin;

    public function __construct(int $spent, int $rest, int $limit, string $usedLogin)
    {
        $this->spent = $spent;
        $this->rest = $rest;
        $this->limit = $limit;
        $this->usedLogin = $usedLogin;
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
