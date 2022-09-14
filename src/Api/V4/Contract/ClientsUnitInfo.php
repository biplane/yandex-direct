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
    protected $Login = null;

    protected $UnitsRest = null;

    /**
     * @return static
     */
    public static function create()
    {
        return new static();
    }

    public function getLogin(): string
    {
        return $this->Login;
    }

    /**
     * @return $this
     */
    public function setLogin(string $value)
    {
        $this->Login = $value;

        return $this;
    }

    public function getUnitsRest(): int
    {
        return $this->UnitsRest;
    }

    /**
     * @return $this
     */
    public function setUnitsRest(int $value)
    {
        $this->UnitsRest = $value;

        return $this;
    }
}
