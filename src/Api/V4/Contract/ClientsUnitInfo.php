<?php

declare(strict_types=1);

namespace Biplane\YandexDirect\Api\V4\Contract;

/**
 * Auto-generated code.
 */
class ClientsUnitInfo
{
    protected $Login = null;

    protected $UnitsRest = null;

    /**
     * Creates a new instance of ClientsUnitInfo.
     */
    public static function create(): self
    {
        return new self();
    }

    /**
     * Gets Login.
     */
    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * Sets Login.
     *
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    /**
     * Gets UnitsRest.
     */
    public function getUnitsRest(): int
    {
        return $this->UnitsRest;
    }

    /**
     * Sets UnitsRest.
     *
     * @return $this
     */
    public function setUnitsRest(int $value)
    {
        $this->UnitsRest = $value;

        return $this;
    }
}
