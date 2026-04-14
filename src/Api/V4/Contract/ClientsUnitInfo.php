<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

use AllowDynamicProperties;

/**
 * Auto-generated code.
 */
#[AllowDynamicProperties]
class ClientsUnitInfo
{
    /** @var string */
    protected $Login;

    /** @var int */
    protected $UnitsRest;

    /**
     * Create a new instance.
     *
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    /**
     * Get Login
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Set Login
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Get UnitsRest
     */
    public function getUnitsRest(): int
    {
        return $this->UnitsRest;
    }

    /**
     * Set UnitsRest
     *
     * @return $this
     */
    public function setUnitsRest(int $value)
    {
        $this->UnitsRest = $value;

        return $this;
    }
}
